<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="/welcome">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h3><b>Sign Up Form</b></h3>
        <p>First name:</p>
        <input type="text" name="fname" id="fname">
        <p>Last name:</p>
        <input type="text" name="lname" id="lname">
    
        <p>Gender:</p>
            <div>
                <input type="radio" name="gender" value="Male">
                <label for="Male">Male</label>
            </div>
            <div>
                <input type="radio" name="gender" value="Female">
                <label for="Female">Female</label>
            </div>
            <div>
                <input type="radio" name="gender" value="Other">
                <label for="Other">Other</label>
            </div>
    
        <p>Nationality:</p>
            <select name="nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Thailand">Thailand</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Laos">Laos</option>
                <option value="Philippines">Philippines</option>
            </select>  
            
        <p>Language spoken:</p>
            <div>
                <input type="checkbox" name="Language" value="Bahasa indonesia">
                <label for="Bahasa indonesia">Bahasa indonesia</label>
            </div>
            <div>
                <input type="checkbox" name="Language" value="English">
                <label for="English">English</label>
            </div>
            <div>
                <input type="checkbox" name="Language" value="Other">
                <label for="Other">Other</label>
            </div>
       
        <p>Bio:</p>
            <textarea rows="10" cols="30"></textarea> <br><br>
        <button type="submit" name="SignUp">Sign Up</button>    
    
    </form>
   
</body>
</html>