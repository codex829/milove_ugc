<?php
namespace App\Repositories;

use App\Models\Ugc;

class UgcRepository {

    public function getUgcList($lang)
    {
        $lang = (empty($lang)) ? 'en' : $lang;
        $ugcList = Ugc::where('lang', $lang)->get();

        return $ugcList;
    }

    public function assembleReasonListResponse($ugcList)
    {
        if ($ugcList->isEmpty()) {
            $res = [
                'code' => 200,
                'error_message' => 'List Not Found',
                'data' => []
            ];

            return $res;
        }

        $data = [
            'report_konten' => [],
            'report_profile' => [],
        ];

        foreach($ugcList as $ugc)
        {
            $dataDetail = [
                'report_id' => $ugc->id,
                'lang' => $ugc->lang,
                'report_title' => $ugc->title,
                'desc' => $ugc->desc
            ];

            if ($ugc->type == 'konten') {
                $data['report_konten'][] = $dataDetail;
            }
            elseif ($ugc->type == 'profile') {
                $data['report_profile'][] = $dataDetail;
            }
            elseif ($ugc->type == 'blokir') {
                $data['report_blokir'][] = $dataDetail;
            }
        }

        $res = [
            'code' => 200,
            'error_message' => 'List Found',
            'data' => $data
        ];

        return $res;
    }

}