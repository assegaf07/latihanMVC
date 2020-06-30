<html>
    <head>
        <title>Form Sign up</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method = "POST">
        @csrf
            <label for="nama">First Name: </label>
            <br>
            <br>
            <input type="text" id="nama" name='nama'>
            <br>
            <br>
            <label for="belakang">Last Name: </label>
            <br>
            <br>
            <input type="text" id="belakang" name='belakang'>
            <br> <br> 
            <label for="Gender">Gender:</label>
            <br><br>
            <input type="radio" name="gender" value="0"> Male <br>
            <input type="radio" name="gender" value="1"> Female <br>
            <input type="radio" name="gender" value="2"> Other <br>
            <br>
            <label>Nationality: </label>
            <br> <br>
            <select>
                <option value="id">Indonesia</option>
                <option value="ms">Malaysia</option>
                <option value="sg">Singapore</option>
                <option value="aus">Australia</option>
                
            </select>
            <br> <br>

            <label for="bio">Bio: </label>
            <br> <br>
            <textarea  id="bio" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Sign Up">




        </form>
    </body>
</html>