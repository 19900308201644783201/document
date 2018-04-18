<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * Test
     *
     * @return Response
     */
    public function index()
    {
        DB::beginTransaction();
        try {
            $orderId = DB::table('orders')->insertGetId([
                'customer_id'  => 1,
                'date_created' => Carbon::now(),
                'date_ship'    => Carbon::now()->addDays('10')
            ]);

            DB::table('order_details')->insert([
                'order_id'   => $orderId,
                'product_id' => 1,
                'quantity'   => 5
            ]);
            // $details = \DB::table('order_details')->get()->toArray();
            // dd($details);

            DB::table('order_details')->insert([
                'order_id'   => $orderId,
                'product_id' => 3,
                'quantity'   => 5
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return response()->json('error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json('success', Response::HTTP_OK);
    }
}
