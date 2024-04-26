

function getImageUrl($image, $directory){
    $imageExtension = $image->getClientOriginalExtension();
    $imageName      = rand(100000, 50000000000).'.'.$imageExtension;
    if ($directory){
        $imageDirectory = $directory;
    }
    else{
        $imageDirectory = 'upload/';
    }
    $image->move($imageDirectory, $imageName);
    $imageUrl = $directory.$imageName;
    return $imageUrl;
}
