<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

$conn = mysqli_connect("localhost","root","","shapeup");
if($conn){
  echo"connected";
}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

<?PHP
          $contribution = "SELECT COUNT(*) FROM reclamation";
          $contributionNonTraitee = "SELECT COUNT(*) FROM reclamation where etat = 'non traitee'";
          $contributionTraitee = "SELECT COUNT(*) FROM reclamation where etat = 'traitee'";
          $contributionEnCours = "SELECT COUNT(*) FROM reclamation where etat = 'en cours'";
?>
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          //['etat', 'contribution'],
          ['non traitee', 'contributionNonTraitee'],
          ['traitee', 'contributionTraitee'],
          ['en cours', 'contributionEnCours'],

          <?php
          
          $sql = "SELECT * FROM contribution";
          $fire = mysqli_query($conn, $sql);
          while ($result = mysqli_fetch_assoc($fire)){

            echo"['".$result[etat]."','".$result[contribution]."']";
          }
          ?>
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

