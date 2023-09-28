<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>staffform</title>
</head>
<body>
    
    <form action="{{route('staff.index')}}" method="Post">
        @csrf
        
        <label>Name </label>
        <input type="text" placeholder="john Doe" name="fullname">
        <label>Email </label>
        <input type="email" placeholder="john@gmail.com" name = "email">
        <label>Number </label>
        <input type="text" placeholder="981705341" name ="number">
        <label>Address</label>
        <input type="text" placeholder="Birtamode" name = "address">
          <button type="submit"> Submit</button>
    </form>
</body>
</html>



