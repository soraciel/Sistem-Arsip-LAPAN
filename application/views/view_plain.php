 <?php foreach ($listUser as $row) {
          ?>
                     <tr>
                        <td> <?= $row->ID_PEG ?> </td>
                      <td> <?=  $row->NAMA_PEG ?> </td>
                      </tr>
                      <?php
            }
          ?>