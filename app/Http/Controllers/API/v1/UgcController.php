<?php

namespace App\Http\Controllers\API\v1;
use App\Models\Telco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UgcRepository;
use Illuminate\Support\Facades\Log;
use App\Models\UgcReport;


class UgcController extends Controller
{
    public function list(Request $request, UgcRepository $ugcRepo)
    {
        $ugcList = $ugcRepo->getUgcList($request->input('lang'));
        $res = $ugcRepo->assembleReasonListResponse($ugcList);

        return response($res);
    }

    public function report(Request $request)
    {

            $this->validate($request, [
                'msisdn' => 'required',
                'content_id' => 'required',
                'reason_id' => 'required',
                "msisdn_target"=>'required',
            ]);
            Log::info("content ".$request->content_id);
            $data = [
                [
                    'reporter'=>$request->msisdn,
                    'target'=>$request->msisdn_target,
                    'type'=>$request->type,
                    'content'=>str_replace("http://staging.mvicall.com/video_caller/","",$request->content_id),
                    'reason_id'=>$request->reason_id,'value'=>$request->value
                    ]
            ];

            UgcReport::insert($data);
            return response(array('code' => 200, 'error_message' => 'Report Success', 'data' => []));


        // }

    }
}
