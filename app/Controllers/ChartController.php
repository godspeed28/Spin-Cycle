<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\UserModel;

class ChartController extends BaseController
{
    public function salesData()
    {
        if (!session()->get('logged_in_admin')) {
            return redirect()->back();
        }
        $orderModel = new OrderModel();

        // Ambil data penjualan per bulan (contoh)
        $data = $orderModel->select("MONTH(created_at) as bulan, SUM(total_harga) as total")
            ->groupBy("MONTH(created_at)")
            ->orderBy("bulan")
            ->findAll();

        $data2 = $orderModel
            ->select("MONTH(created_at) as bulan, COUNT(*) as jumlah_order")
            ->groupBy("MONTH(created_at)")
            ->orderBy("bulan")
            ->get()
            ->getResultArray();

        $data3 = $orderModel
            ->select("MONTH(created_at) as bulan, COUNT(*) as complete_laundry")
            ->where('status', 'Selesai')
            ->groupBy("MONTH(created_at)")
            ->orderBy("bulan")
            ->get()
            ->getResultArray();

        // Siapkan array data numerik
        $labels = [];
        $values = [];

        $valuesOrders = [];
        $valuesLaundry = [];

        // // raw data
        // $data = [
        //     ['bulan' => 1, 'total' => 500000],
        //     ['bulan' => 2, 'total' => 620000],
        //     ['bulan' => 3, 'total' => 100000],
        //     ['bulan' => 4, 'total' => 300000],
        //     ['bulan' => 5, 'total' => 700000],
        //     ['bulan' => 6, 'total' => 10900],
        //     ['bulan' => 7, 'total' => 278000],
        //     ['bulan' => 8, 'total' => 15000],
        //     ['bulan' => 9, 'total' => 12000],
        // ];

        // raw data
        // $data2 = [
        //     ['bulan' => 1, 'jumlah_order' => 50],
        //     ['bulan' => 2, 'jumlah_order' => 60],
        //     ['bulan' => 3, 'jumlah_order' => 10],
        //     ['bulan' => 4, 'jumlah_order' => 30],
        //     ['bulan' => 5, 'jumlah_order' => 70],
        //     ['bulan' => 6, 'jumlah_order' => 109],
        //     ['bulan' => 7, 'jumlah_order' => 27],
        //     ['bulan' => 8, 'jumlah_order' => 15],
        //     ['bulan' => 9, 'jumlah_order' => 120],
        // ];

        // raw data
        // $data3 = [
        //     ['bulan' => 1, 'complete_laundry' => 100],
        //     ['bulan' => 2, 'complete_laundry' => 10],
        //     ['bulan' => 3, 'complete_laundry' => 220],
        //     ['bulan' => 4, 'complete_laundry' => 399],
        //     ['bulan' => 5, 'complete_laundry' => 290],
        //     ['bulan' => 6, 'complete_laundry' => 300],
        //     ['bulan' => 7, 'complete_laundry' => 66],
        //     ['bulan' => 8, 'complete_laundry' => 12],
        //     ['bulan' => 9, 'complete_laundry' => 120],
        // ];

        $bulanMap = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];

        foreach ($data as $row) {
            $labels[] = $bulanMap[$row['bulan']];
            $values[] = (int)$row['total'];
        }
        foreach ($data2 as $row) {
            $labelsOrders[] = $bulanMap[$row['bulan']];
            $valuesOrders[] = (int)$row['jumlah_order'];
        }
        foreach ($data3 as $row) {
            $labelsLaundry[] = $bulanMap[$row['bulan']];
            $valuesLaundry[] = (int)$row['complete_laundry'];
        }

        return $this->response->setJSON([
            'labels' => $labels,
            'data' => $values,
            'dataOrders' => $valuesOrders,
            'dataLaundry' => $valuesLaundry
        ]);
    }

    public function userData()
    {
        $userModel = new UserModel();
        $data = [];

        for ($i = 6; $i >= 0; $i--) {
            $timeStart = date('Y-m-d H:i:s', strtotime("-" . ($i + 1) * 5 . " minutes"));
            $timeEnd = date('Y-m-d H:i:s', strtotime("-" . $i * 5 . " minutes"));

            $count = $userModel
                ->where('last_activity >=', $timeStart)
                ->where('last_activity <', $timeEnd)
                ->where('role', 'customer')
                ->countAllResults();

            $data[] = $count;
        }

        return $this->response->setJSON($data);
    }
}
