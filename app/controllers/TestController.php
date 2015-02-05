<?php

class TestController extends BaseController {
    
    const EXTENSION_NOT_FOUND     = 0002;
    const FILE_NOT_VALID          = 0003;
    const FILE_LARGE_SIZE         = 0004;
    const FILE_ALREADY_EXISTS     = 0004;


    public function getPicUpload(){
       return View::make('test.picUpload');
    }
    
    public function postPicUpload(){
       
       $file = Input::file('fileToUpload');
       $allowed_Extensions = array('png', 'jpg', 'jpeg');
       $new_Path = "/public/assests";
       $uploaded = self::uploadAnyFile($file, $new_Path);
       
       if(!$uploaded){
           echo "File Not uploaded";
       }else{
           echo "uploaded";
       }
       
    }
    
   public function uploadAnyFile($file, $new_Path, $new_Name = null, $allowed_Extensions = null, $allowed_Size = null){
       
       $file_name             = $file->getFilename();            // emporary file name
       $file_OriginalName     = $file->getClientOriginalName();  // Original Name of the file
       $file_Size             = $file->getClientSize();          // Size of the file
       $file_MimeType         = $file->getClientMimeType();      // Mime Type of the file
       $file_Extension        = $file->guessClientExtension();   // Ext of the file
       $file_TemporaryPath    = $file->getRealPath();            // Temporary file path
       
       if($allowed_Extensions && !in_array($file_Extension, $allowed_extensions)){
           echo "NOt allowed Extension";
       }
       
       if($file->isValid()){
           echo "NOt allowed file";
       }
       
       if($allowed_Size && $file_Size > $allowed_Size){
           echo "NOt allowed size";
       }
       
//       if(file_exists($file_name)){
//           echo "NOt allowed ";
//       }
//       
       $uploaded = $file->move($new_Path, $file_name);
       
       if(!$uploaded){
           echo "NOt";
       }else{
           return TRUE;
       }       
       
   }
}
