<<!DOCTYPE html>
<html>
<head>
<title> Employee </title>
</head>
 <body>
    <h1>Employee Registration Form</h1>
    <form  action ="process.php" method="post" >
        <table>

            <tr>
                <td>Employee Name : </td>
                <td><input type="text" id="Ename" name="Ename" ></td>
            </tr> 

            <tr>
                <td>Employee ID : </td>
                <td><input type="text" id="Eid" name="Eid" ></td>
            </tr> 

            <tr>
                <td>Email: </td>
                <td><input type="text" id="email" name="email"></td>
            </tr> 

            <tr> 
                <td> Date Of Birth </td>
                </tr>
                <tr>
                <td><input type="date" id="date" name="date"></td>    
            </tr>  

            <tr> 
                <td> Address : </td> 
                <td><input type="text" id="Address" name="Address"> </td>
            </tr>

            <tr> 
                <td> State : </td>  
                <td><input type="text" id="State" name="State"> </td>
            </tr>

            <tr> 
                <td> Country : </td>  
                <td><input type="text" id="Country" name="Country"> </td>
            </tr>

            <tr> 
                <td> Phone : </td>  
                <td><input type="text" id="Phone" name="Phone"> </td>
            </tr>
        
            <tr>
            <td><input type="submit" value="Submit"></td>
			</tr>
       
        </table>
    </form>
</body> 

</html>