<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $n = request()->n ?? 1;
        // return $this->listFibonacci(10);
        // return $this->searchFibonacciDequi($n);
        
        $this->tinhTongPhanTuMang();
        $array = [1 , 4, 5, 8 ,12, 5, 1, 2, 3, 3]; //10 elements
        echo 'Tổng các phần tử của mảng bằng đệ qui là: ' .
        $this->tinhTongPhanTuMangDeQui($array, 10);

        echo 'Sắp xếp ác số thành số lớn nhất: ';
        $array = [9, 50, 2, 6];
        $this->SapXepCacSoThanhSoLonNhat($array);
    }

    private function listFibonacci($n)
    {
        // Dãy số Fibonaci được định nghĩa như sau: F0 = 0, F1 = 1, F2 = F0+F1. Nhập n với 2<=n<=90. Viết chương trình in r số Fibonacci đầu tiên.
        $f0 = 0; $f1 = 1;
        echo "First $n fibonacci number is: <br> \n $f0 $f1 ";
        for($i = 2; $i < $n; $i++) {
            $f2 = $f0 + $f1;
            $f0 = $f1;
            $f1 = $f2;
            echo $f2. ' ';
        }
        return;
    }

    private function searchFibonacciDequi($n)
    {
        if ($n == 0 || $n == 1) {
            return $n;
        }
        return $this->searchFibonacciDequi($n - 1) + $this->searchFibonacciDequi($n - 2);
    }

    public function tinhTongPhanTuMang()
    {
        $sum = 0;
        $array = [1 , 4, 5, 8 ,12, 5, 1, 2, 3, 3]; //10 elements
        for ($i = 0; $i< count($array); $i++) {
            $sum += $array[$i];
        }
        echo 'Tính tổng các phần tử trong mảng bằng for là: ' . $sum;
        echo '<br>';

        $sum = 0;
        $count = count($array);
        $i = 0;
        while($i < $count) {
            $sum += $array[$i];
            $i++;
        }
        echo 'Tính tổng các phần tử trong mảng bằng while là: ' . $sum;
        echo '<br>';
    }

    public function tinhTongPhanTuMangDeQui(array $array, int $length) // n là số phần tử
    {
        if (-- $length < 0) return 0;
        return $array[$length]  + $this->tinhTongPhanTuMangDeQui($array, $length);
    }

    public function SapXepCacSoThanhSoLonNhat($arr)
    {
        $count = count($arr);
        for ($i = 0 ; $i < $count - 1; $i ++) {
            for ($j = $i + 1 ; $j < $count; $j ++) {
                $temp = 1;
                if ($arr[$i] % 10 == 0) {
                    
                }
                // if ($arr[$i] < $arr[$j] &&)
            }
        }
    }
}
