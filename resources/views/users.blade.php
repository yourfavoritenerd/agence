@include('layouts.header')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
          
            <div class="row" style="margin-bottom: 40px;">
                <div class="col">
                  <form id="demoform">
                    <select multiple="multiple" size="10" name="duallistbox_demo1[]" title="duallistbox_demo1[]">
                <option value="payee1">Aviva Insurance - Business - 987654</option>
                <option value="payee2">Bell Mobility - 66853 (John Smith)</option>
                <option value="payee3">Bell Mobility - 75432 (Jane Smith)</option>
                <option value="payee4">Bell Mobility - 98765 (Jim Smith)</option>
                <option value="payee5">Canadian Tire Commercial Mastercard - **** 5525</option>
                <option value="payee6">Canadian Tire Mastercard - **** 3158 (President's Card)</option>
                <option value="payee7">FedEx Express Canada - 54321</option>
                <option value="payee8">Lowes Canada - 12345</option>
                <option value="payee9">Mastercard, PC Financial - **** 5535</option>
                <option value="payee10">Qtrade Investor - 12345</option>
                <option value="payee11" selected="selected">Servus Mastercard - **** 5545</option>
                <option value="payee12">Telus - 123456787 (Calagary  Office)</option>
                <option value="payee13">Telus - 123456788 (Edmonton NW Office)</option>
                <option value="payee14">Telus - 123456789 (Edmonton SE Office)</option>
              </select>
                    <br>
                    <div class="row">
                      <div class="col-md-6 offset-md-6">
                        <button type="submit" class="btn btn-primary w-100">Create payment (#)</button>
                      </div>
                    </div>
                  </form>
            
                </div>
              </div> 

              <div class="card-body py-4">
                <table class="table table-striped">
                  <thead>
                    <td scope="col"><strong>Ana Paula Fontes Martins Chiodaro</strong></td>
                    <tr>
                      <th scope="col"><strong>Período</strong></th>
                      <th scope="col" ><strong>Receita Líquida</strong> </th>
                      <th scope="col"><strong>Custo Fixo</strong></th>
                      <th scope="col"><strong>Comissão</strong></th>
                      <th scope="col"><strong>Lucro</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>mdo</td>
                      <td>mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>fat</td>
                      <td>mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td >Larry the Bird</td>
                      <td>twitter</td>
                    </tr>
                    <tr>
                      <th scope="row"><strong>SALDO</strong></th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>fat</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

<script>
    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({
      nonSelectedListLabel: 'Available Payees',
      selectedListLabel: 'Selected Payees',
      preserveSelectionOnMove: 'moved',
      moveAllLabel: 'Move all',
      removeAllLabel: 'Remove all'
    });
    $("#demoform").submit(function() {
      alert($('[name="duallistbox_demo1[]"]').val());
      return false;
    });
  </script>
  <!-- partial -->
@include('layouts.footer')
