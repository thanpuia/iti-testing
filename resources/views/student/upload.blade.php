<!DOCTYPE html>
<html>
<head>
 </head>
  
<body>
   
   
        IMAGE
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                    <input type="file" name="file" class="form-control">
                    <input type="hidden" name="type" value="image">
                    <button type="submit" class="btn btn-success">Upload</button>
   


        </form>
        EXCEl
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                    <input type="file" name="file" class="form-control">
                    <input type="hidden" name="type" value="excel">
                    <button type="submit" class="btn btn-success">Upload</button>
   


        </form>
</body>
  
</html>