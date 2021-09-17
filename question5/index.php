<!DOCTYPE html>

<head>
  <title>CREDIT ASSURE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    .creditors-table {
      font-family: Helvetica, sans-serif;
      margin: 8px 8px 32px;
      border: 1px solid black;
    }

    .table-head {
      font-size: 1.2em;
      background-color: #666;
      color: #fff;
      padding: 2px 6px;
      border-collapse: separate;
      border: 1px solid #000;
    }

    .table-row:nth-child(odd) {
      background-color: #ddd;
    }

    .table-data {
      padding: 2px;
    }

    a {
      color: blue;
      text-decoration: underline;
      cursor: pointer;
    }

    button {
      margin: 8px;
      padding: 2px 6px;
    }

    .hidden {
      display: none;
    }
  </style>
  <script>
    const URL = 'http://dev-trinh.besmartee.com/dev-test/api-interview.php'
    $(document).ready(() => {
      // $.post(URL);

      // $.ajax({
      //   url: URL,
      //   data: 'data',
      //   headers: {
      //     'Access-Control-Allow-Origin': 'http://besmarteetechtest'
      //   },
      //   dataType: 'json',
      //   success: data => {
      //     console.log(data);
      //   }
      // })

      $('a').click(e => {
        const url = e.target.innerHTML;
        $.post('ajax_req.php', {
          'creditor': url
        }, response => {
          console.log(response);
        })
        $('#data').removeClass('hidden');
      })

      $('button').click(() => {
        $('#data').addClass('hidden');
      })
    })
  </script>
</head>

<body>
  <?php
  // include "post-req.php";
  ?>
  <table class="creditors-table">
    <thead>
      <tr class="table-row">
        <th class="table-head">Creditor</th>
        <th class="table-head">Date</th>
        <th class="table-head">Outstanding balance</th>
        <th class="table-head">Monthly Payment</th>
        <th class="table-head">Account Type</th>
      </tr>
    </thead>
    <tbody>
      <?php include "table-data.php"; ?>
    </tbody>
  </table>
  <button>Close</button>
  <div id="data" class="hidden">
    <?php
    include "creditor_data.php";
    ?>
  </div>
</body>

</html>
