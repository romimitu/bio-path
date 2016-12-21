<?php
    function rowList($array,$arraykey)
    {

        return (($array->currentPage()-1) * $array->perPage() + $arraykey + 1);
    }
    function uploadFile($image,$request,$path='')
    {
        if($request->$image!=null)
        {
            $imageName = $request->$image->getClientOriginalName();
            $request->$image->move(public_path($path), $imageName);
            return $path.$imageName;
        }
    }
    

