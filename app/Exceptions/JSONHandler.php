<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/13/16
 * Time: 12:51 PM
 */

namespace App\Exceptions;

use Exception;

class JSONHandler extends Handler
{

    /**
     * @param \Illuminate\Http\Request $request
     * @param Exception $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        $type = get_class($e);
        if(preg_match('#^Contracts[\\\\](.+)$#', $type, $matches)){
            $type = $matches[1];
            $msg = $e->getMessage();
        }else{
            $type = 'Exception';
            $msg = $e->getMessage();
        }

        $response = response()->json(['error' => 1, 'type' => $type, 'desc' => $msg]);

        $response->header('X-Exception-Code', $e->getCode());
        $response->header('X-Exception-Type', get_class($e));
        $response->header('X-Exception-Message', urlencode($e->getMessage()));
        return $response;
    }
}