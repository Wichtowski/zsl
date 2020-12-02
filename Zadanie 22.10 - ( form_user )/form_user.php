<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="dane.css">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
  </head>
  <body>

    <table >
    <form  action="form_user_data.php" method="post" enctype="multipart/form-data">


<tr>

      <td><b>Account type *</b></td>
      <td>

      <input type="radio" name="personal" checked required>Personal Account
      <input type="radio" name="personal" required>Business Account</td>
</tr>
<tr >
        <td><b>First Name *</b></td>
        <td><input type="text" name="name" autofocus required pattern="[A-ZĄĘŚŹŻĆÓŃŁ][a-ząęśźżćńół]{2,10}"></td>
</tr>
<tr>
        <td><b>Last Name *</b></td>
        <td><input type="text"  name="lastname" required pattern="[A-ZĄĘŚŹŻĆÓŃŁ][a-ząęśźżćńół]{2,20}"></td>
</tr>


<tr>

        <td><b>Country/Region *</b></td>

        <td><select name="kraj" required>
          <option>Polska‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍      ‍ ‍‍ ‍‍ ‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍ ‍‍ ‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍</option>
          <option selected>USA</option>
          <option>Grecja</option>
          </select>
          </td>
</tr>


       <tr>
         <td><b>Street Address *</b></td>
         <td>
           <input type="text" name="street1"  required>
         </tr>
         <tr>
           <td><b>Street Address 2 </b></td>
           <td>
             <input type="text" name="street2" >
           </tr>
           <tr>
             <td><b>City *<b></td>
             <td>
               <input type="text" name="city"  required>
             </tr>
             <tr>
               <td><b>State/Province *</b></td>
               <td>
                 <select name="woje" required>
                   <option value="" disabled hidden selected>Select State or Province</option>
                   <option value="Wielkopolskie">Wielkopolskie</option>
                   <option value="Zachodniopomorskie">Zachodniopomorskie</option>
                   <option value="Małopolskie">Małopolskie</option>
                 </select>
               </tr>
               <tr>
              <td><b>ZIP/Postal Code *</b></td>
              <td>
                <input type="text" name="postal"  required pattern="[0-9]{2,}">
              </td>
            </tr>
            <tr><td></td>
              <td  style="color:grey" ><p style="font-size:15px;" >Only used for question related to your order</p></td>
            </tr>
            <tr>
              <td><b>Phone number *</b></td>
              <td>
                <input type="text" name="tel" required pattern="[0-9]{9,}">
              </td>
            </tr>
<br>
              <tr><td  colspan="2">
               <input type="submit" name="" value="Wyślij dane">
  </td></tr>
    </form>
  </table>
  </body>
</html>
