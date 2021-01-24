<!DOCTYPE html>
<html>
<head>
 </head>
  
<body>
   
   
  
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                    <input type="file" name="file" class="form-control">
   
                    <button type="submit" class="btn btn-success">Upload</button>
   


        </form>
  
</body>
  
</html>