<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ezekia Coding Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Candidates Filtered Data</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
          @foreach ($data[0] as $value_key => $value_value) 
            <th>{{ $value_key }}</th>
          @endforeach
      </tr>
        </thead>
        <tbody>
          @foreach ($data as $key => $value)
          <tr>
            @foreach ($value as $value_value) 
              <td>{{ $value_value }}</td>
              @endforeach
            </tr>    
          @endforeach
        
    </tbody>
  </table>
</div>

</body>
</html>
