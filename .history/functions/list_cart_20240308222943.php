
<?php
function displayChores($cid,$url,$med_name,$medicine_qty,$medicine_price,$desc){
    $medicine="
<tr>
                    <td class='product-thumbnail'>
                      <img src=".$url." alt='Image' class='img-fluid'>
                    </td>
                    <td class='product-name'>
                      <h2 class='h5 text-black'>".$med_name."</h2>
                    </td>
                    <td>150.00 cedis</td>
                    <td>
                      <div class='input-group mb-3' style='max-width: 120px;'>
                        <div class='input-group-prepend'>
                          <button class='btn btn-outline-primary js-btn-minus' type='button'>&minus;</button>
                        </div>
                        <input type='text' class='form-control text-center' value='1' placeholder=''
                          aria-label='Example text with button addon' aria-describedby='button-addon1'>
                        <div class='input-group-append'>
                          <button class='btn btn-outline-primary js-btn-plus' type='button'>&plus;</button>
                        </div>
                      </div>
    
                    </td>
                    <td>150.00 cedis</td>
                    <td><a href='#' class='btn btn-primary height-auto btn-sm'>X</a></td>
                  </tr>";



                  ?>