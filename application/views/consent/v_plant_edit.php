<html>

<head>
    <title>ThaiCreate.Com</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $("#txtCustomerID").change(function() {
            $.ajax({
                    url: "returnCustomer2.php",
                    type: "POST",
                    data: 'sCusID=' + $("#txtCustomerID").val()
                })
                .success(function(result) {

                    var obj = jQuery.parseJSON(result);

                    if (obj == '') {
                        $('input[type=text]').val('');
                    } else {
                        $.each(obj, function(key, inval) {

                            $("#txtCustomerID").val(inval["CustomerID"]);
                            $("#txtName").val(inval["Name"]);
                            $("#txtEmail").val(inval["Email"]);
                            $("#txtCountryCode").val(inval["CountryCode"]);
                            $("#txtBudget").val(inval["Budget"]);
                            $("#txtUsed").val(inval["Used"]);

                        });
                    }

                });

        });
    });
    </script>
</head>

<body>
    <h2>jQuery Auto fill ดึงข้อมูลอัตโนมัติ</h2>
    <table width="302" border="1">
        <tr>
            <td width="104">CustomerID</td>
            <td width="153"><input type="text" id="txtCustomerID" name="txtCustomerID" size="5"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" id="txtName" name="txtName" size="20"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" id="txtEmail" name="txtEmail" size="25"></td>
        </tr>
        <tr>
            <td>CountryCode</td>
            <td><input type="text" id="txtCountryCode" name="txtCountryCode" size="2"></td>
        </tr>
        <tr>
            <td>Budget</td>
            <td><input type="text" id="txtBudget" name="txtBudget" size="5"></td>
        </tr>
        <tr>
            <td>Used</td>
            <td><input type="text" id="txtUsed" name="txtUsed" size="5"></td>
        </tr>
    </table>

</body>

</html>