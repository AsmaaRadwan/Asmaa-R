<!DOCTYPE html>
<html>
    <head>
        <title>Javascript - Add HTML Table Row </title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='main.js'></script>

        
    </head>

    <body>
        <center></center>
        <div class="first">
        id:<input type="text" name="id" id="id" /><br/><br/>
        full name: <input type="text" name="fullname" id="fullname" /><br/><br/>
        email: <input type="text" name="email" id="email" /><br/><br/>
        phone number: <input type="text" name="pnumber" id="pnumber" /><br/><br/>
        age: <input type="text" name="age" id="age" /><br/><br/>
        <br><br>
        <div class="container"></div>
       <input type="button" value="Add" id="addBtn">
        <button onclick="refresh();">Reset</button>&nbsp;&nbsp;
        <button onclick="addRow();">Display</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br><br><br>
<center>
        <table border="1">
            
            <tr style="text-align: center; margin: 50%";>
                <th>id</th> 
                <th>full name</th>
                <th>email</th>
                <th>phone number</th>
                <th>age</th>
            </tr>
            
            
        </table>
        
    </center>
    </div>
<style>
    .first{
        text-align: center;
        color: BLUE;
        background-color: whitesmoke;


    }
</style>
        
    </body>

</html>
