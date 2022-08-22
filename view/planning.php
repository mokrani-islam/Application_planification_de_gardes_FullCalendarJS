

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="stylesheet" type="text/css" href="Styles/styleAcceuil.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <title>Planning</title>
    <link href='js/fullcalendar/lib/main.css' rel='stylesheet' />
    <script src='js/fullcalendar/lib/main.js'></script>
    <script src="js/fullcalendar/lib/locales-all.min.js"></script>
    <script src="js/fullcalendar/lib/locales/fr.js"></script>
    <link rel="stylesheet" href="Styles/garde.css">
    <script>
      
      
      
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        
        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale:'fr',
          initialView: 'dayGridMonth',
          events:'garde.php',
          
          /*Changement de langue*/
          /*locale:frLocale,*/
          
         
          /*selectable: true,
	        select: async function (start, end, allDay) {
	        const { value: formValues } = await Swal.fire({
		      title: 'Ajouter une garde',
          html:
		      
          '<input id="swalEvtTitle" class="swal2-input" placeholder="Entrez nom">' +
          '<textarea id="swalEvtDesc" class="swal2-input" placeholder="Entrez prenom "></textarea>',

		      focusConfirm: false,
		      preConfirm: () => {
		      return [
			    document.getElementById('swalEvtTitle').value,
			    document.getElementById('swalEvtDesc').value,
		             ]                      
                                                        }
	                                                       });

	        if (formValues) {
		// Add event
		       fetch("joutergarde.php", {
           method: "POST",
		       headers: { "Content-Type": "application/json" },
		       body: JSON.stringify({ request_type:'addEvent', start:start.startStr, end:start.endStr, event_data: formValues}),
		                                 })
		       .then(response => response.json())
		       .then(data => {
		       if (data.status == 1) {
			     Swal.fire('Event added successfully!', '', 'success');
		       } else {
           Swal.fire(data.error, '', 'error');
		       }

		  // Refetch events from all sources and rerender
		        calendar.refetchEvents();
		})
		.catch(console.error);
	  }
	}*/

          /*[{"id":"1","start":"2022-08-15","end":"2022-08-15"},{"id":"2","start":"2022-08-17","end":"2022-08-17"} ]/*[{id:'1',
          title :'Dr mokrani islam',
                    start :'2022-08-15',
                    end :'2022-08-15',
                    extendedProps: {
                               department: 'BioChemistry'
                                    }
          
          
          }
        ],
  eventDidMount: function(info) {
    console.log(info.event.extendedProps);
    // {description: "Lecture", department: "BioChemistry"}
  }
*/
        });

        calendar.render();
      });

    </script>
  </head>
  <body>
  <div class="header">
<a href="AcceuilChefDeService.php"><i class="fas fa-heartbeat"></i>Me<span class="spa">d</span >gard<span class="spa1">e</span></a>
<div class="menuP">
<ul>
  <li><a href="AcceuilChefDeService.php">Acceuil</a></li>
  <li><a href="planning.php">Planning</a></li>
  <li><a href="ListeMedecins.php">Médecins</a></li>
  <li class="inf"><a href="ListesInfirmier.php">Infirmiers</a></li>
  <?php 
session_start();
$type=$_SESSION['type'];

if ($type =='chef'){
  echo " <li class='gar'><a href='AddGarde.php'>Gardes</a></li> ";
}
?>

</ul>
</div>

<div class="cote">

<a href="" class="menur"><i class="fas fa-hospital-user"></i></a>

   <div class="menu-deroulant">
   <ul class="menu2">
    <li class="link2"><a href="Deconnexion.php?deconnexion=true">Se déconnecter</a></li>
    <li class="link1"><a href="Deconnexion.php?deconnexion=true">Profil</a></li>
   </ul>
    
   </div>
</div>

</div>
    <div class="container">
    <div id='calendar'></div>
    </div>
  </body>
</html>