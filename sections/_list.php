<div class='row'>
  <div class='col-12 py-1 px-4'>

    <div class='card border border-success bg-dark text-white'>
      <h6 class='card-header bg-success text-white'>
        <img src='./images/codes.jpg' alt='Codes: Picture of codes' height='18' class='ms-2'
          style='margin-top:-0.4rem;border-radius: 3rem;'>
        Codes
      </h6>
      <span>
        <input type='checkbox' id='invalidFilter'>
        <label for='invalidFilter'>Hide invalid</label>
      </span>
      <div class='card-body p-0'>

        <div id='successCode'></div>

        <table class='table table-sm table-dark my-3 border'>
          <tr>
            <th class='no-select'>Code</th>
            <th class='no-select'>Status</th>
            <th class='no-select'>Credit</th>
          </tr>

          <?php
          foreach ($jsonData['codes'] as $code => $data) {
            $ifSuccess = ($data['status'] == "success") ? "data-success-code='$code'" : "";
            $ifInvalid = ($data['status'] == "invalid") ? "text-decoration-line-through text-muted" : "";
            echo "
            <tr>
              <td class='font-monospace $ifInvalid' style='letter-spacing: 0.25rem;' $ifSuccess>$code</td>
              <td class='no-select $ifInvalid'>{$data['status']}</td>
              <td class='no-select $ifInvalid'>{$data['credit']}</td>
            </tr>";
          }
          ?>

        </table>
      </div>
    </div>
  </div>
</div>