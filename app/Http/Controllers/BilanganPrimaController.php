<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BilanganPrimaController extends Controller
{
    public function index()
    {
        return view('bilangan_prima.index');
    }

    public function proses(Request $request)
    {
        $maxNumber = (int) $request->input('max_number');
        $primeNumbers = $this->findPrimeNumbers($maxNumber);

        return view('bilangan_prima.index', compact('primeNumbers'));
    }

    private function findPrimeNumbers($maxNumber)
    {
        $primeNumbers = [];

        for ($num = 2; $num <= $maxNumber; $num++) {
            $isPrime = true;

            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i === 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                $primeNumbers[] = $num;
            }
        }

        return $primeNumbers;
    }
}
