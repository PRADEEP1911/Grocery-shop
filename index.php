<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
 
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Grocery Shop inventory</span>
</nav>
            <div class="row">
                <div class="col-sm-5">
                    <div class="container">
                            <div class="list-group-item list-group-tem-action active">Item</div>
 
                            <div class="panel-body bg-dark" style="color: white">
                                <form id="tbl-project">
                                    <div class="panel-body bg-dark" style="color: white">
 
                                    <table class="table table-bordered" style="color: white">
              <tr>
                <td>
                  <input type="checkbox" name="pos" value="Suger">
                  <label>Suger</label>
                </td>
                <td>
                  <input type="number" name="qty" id="qty" size="10px">
                </td>

                <td>
                  <select class="form-control" id="option" name="option" placeholder="option" required>
                    <option value="">Please Select</option>
                    <option value="1">GR</option>
                    <option value="2">KG</option>
                  </select>
                </td>


              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="pos" value="Tea">
                  <label>Tea</label>
                </td>
                <td>
                  <input type="number" name="qty" size="10px">
                </td>

                <td>
                  <select class="form-control" id="option" name="option" placeholder="option" required>
                    <option value="">Please Select</option>
                    <option value="1">GR</option>
                    <option value="2">KG</option>
                  </select>
                </td>


              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="pos" value="Flour">
                  <label> Flour</label>
                </td>
                <td>
                  <input type="number" name="qty" size="10px">
                </td>

                <td>
                  <select class="form-control" id="option" name="option" placeholder="option" required>
                    <option value="">Please Select</option>
                    <option value="1">GR</option>
                    <option value="2">KG</option>
                  </select>
                </td>

              </tr>

              <tr>
                <td>
                  <input type="checkbox" name="pos" value="Rice">
                  <label> Rice</label>
                </td>
                <td>
                  <input type="number" name="qty" size="10px">
                </td>

                <td>
                <select class="form-control" id="option" name="option" placeholder="option" required>
                    <option value="">Please Select</option>
                    <option value="1">GR</option>
                    <option value="2">KG</option>
                  </select>
                </td>

              </tr>

              <tr>
                <td>
                  <input type="checkbox" name="pos" value="Dhall">
                  <label> Dhall</label>
                </td>
                <td>
                  <input type="number" name="qty" size="10px">
                </td>

                <td>
                <select class="form-control" id="option" name="option" placeholder="option" required>
                    <option value="">Please Select</option>
                    <option value="1">GR</option>
                    <option value="2">KG</option>
                  </select>
                </td>

              </tr>



            </table>

                <div>                      
                <button type="button" class="btn btn-info" onclick="Add()"  name="Ok" id="Ok"> OK
                  </button>
                </div>

                </div>
 
            </form>
         </div>
 
     </div>
    </div>
 
               
    <div class="col-sm-4">
        <div class="container">
        <div class="list-group-item list-group-tem-action active">AddProducts</div>
        <table id="tbl-item" class="table table-dark table-bordered" cellspacing="0" width="100%" align="center">
            <thead>
            <tr>
                <th>Delete</th>
                <th>Item</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
            <tbody>
 
            </tbody>
        </table>
 
    </div>
    </div>
        <div class="col-sm-2">
            <div class="list-group-item list-group-item-action active">Bill</div>
            <div>
                <label>Total</label>
                <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total" placeholder="Total" required>
            </div>
            </br>
 
            <div>
                <input type="button" class="btn btn-warning" value="Reset" name="reset" id="reset">
            </div>
        </div>
 
</div>
 
 
 
 
 

<script type="text/javascript">
 
 var tot = 0;
    var total = 0;

    function Add() {

      $("input[name='pos']:checked").each(function() {
        // Get the value
        let check = $(this).val();
        var price = null;

        if (check == "Suger") 
        {
          price = 12;

        } 
        else if (check == "Tea") 
        {
          price = 15;
        } 
        else if (check == "Flour") 
        {
          price = 35;
        } 
        else if (check == "Rice") 
        {
          price = 10;
        } 
        else if (check == "Dhall")
         {
          price = 32;
        }
        var calamount=0;

        var qty = $(this).closest("tr").find('[name="qty"]').val() || 0;


        var optionchange = $(this).closest("tr").find("select");
          
          if (optionchange.val() == 2) 
          {
            var calamount = (qty * price);
            $("#total").val(calamount);
          }

          if (optionchange.val() == 1)
           {
            var calamount = parseFloat(qty / 1000 * price);
          }

        var table1 =
          "<tr>" +
          "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete </td>" +
          "<td>" + check + "</td>" +
          "<td>" + price + "</td>" +
          "<td>" + qty + "</td>" +
          "<td>" + calamount.toFixed(2)  + "</td>" +
          "</tr>";

        total += Number(calamount);
        $('#total').val(total);


        $("#tbl-item tbody").append(table1);

      });

    }

    function deleterow(e) {
      total_cost = parseInt($(e).parent().parent().find('td:last').text(), 10);
      total -= total_cost;
      $('#total').val(total);
      $(e).parent().parent().remove();
    }



    $('#reset').click(function() {
      location.reload();
    });
 
 
</script>
</body>
</html>