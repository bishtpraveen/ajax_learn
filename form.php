<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
    <script src="formscript.js"></script>
</head>

<body>
    <div id="form-div">

        <form action="#" method="post">
<h1>Application form</h1>

            <div>
                <label for="">Name</label>
                <input type="text" name="username">


            </div>
            <div>
                <label for=""> Select State</label>
                <select onchange="fetchCities(this.value)" name="" id="">
                    <option value="">Select State</option>
                    <option value="this is value of bhir">Bihar</option>
                    <option value="">M.P.</option>
                    <option value="">U.P.</option>





                </select>


            </div>



            <div>
                <label for=""> Select city</label>
                <select name="" id="">
                    <option value="" id="cities">first select state</option>




                </select>


            </div>




<div>
<input type="submit" value="submit">

</div>
        </form>

    </div>
</body>

</html>