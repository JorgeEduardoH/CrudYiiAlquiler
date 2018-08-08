<script language="javascript">
	function mostrarlinea(anio){
		$("#texto_linea").show();
		$("#anio_"+anio).show();
	}
	function ocultarlinea(anio){
		$("#texto_linea").hide();
		$("#anio_"+anio).hide();
	}
  function mostrarlineaActual(anio){
    ocultarlinea(1998);
    ocultarlinea(1999);
    ocultarlinea(2000);
    ocultarlinea(2001);
    ocultarlinea(2002);
    ocultarlinea(2003);
    ocultarlinea(2004);
    ocultarlinea(2005);
    ocultarlinea(2006);
    ocultarlinea(2007);
    ocultarlinea(2008);
    ocultarlinea(2009);
    ocultarlinea(2010);
    ocultarlinea(2011);
    ocultarlinea(2012);
    ocultarlinea(2013);
    ocultarlinea(2014);
	ocultarlinea(2015);
	ocultarlinea(2016);
    $("#texto_linea").show();
    $("#anio_"+anio).show();
  }
</script>

<div class = "container">
	<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding image-central">
    		<img src="<?php echo Yii::app()->baseUrl;?>/images/title-linetime.png" id="line-time"/>
    </div>
    
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 line-tiem">
    	<img src="http://premioamwaydeperiodismoambiental.com/images/linea_tiempo.png?f=df" usemap="#Map" border="0" />
    </div>
	
    <map name="Map" id="Map" style="  cursor: pointer;">
          <area shape="rect" coords="17,84,63,154" onclick="mostrarlineaActual(1998)" />
          <area shape="rect" coords="69,26,114,87" onclick="mostrarlineaActual(1999)" />
          <area shape="rect" coords="123,86,164,152" onclick="mostrarlineaActual(2000)" />
          <area shape="rect" coords="176,27,215,87" onclick="mostrarlineaActual(2001)" />
          <area shape="rect" coords="228,87,270,152" onclick="mostrarlineaActual(2002)" />
          <area shape="rect" coords="283,28,322,86" onclick="mostrarlineaActual(2003)" />
          <area shape="rect" coords="330,87,376,152" onclick="mostrarlineaActual(2004)" />
          <area shape="rect" coords="389,28,430,84" onclick="mostrarlineaActual(2005)" />
          <area shape="rect" coords="438,86,484,149" onclick="mostrarlineaActual(2006)" />
          <area shape="rect" coords="492,26,534,86" onclick="mostrarlineaActual(2007)" />
          <area shape="rect" coords="547,86,591,152" onclick="mostrarlineaActual(2008)" />
          <area shape="rect" coords="600,23,645,86" onclick="mostrarlineaActual(2009)" />
          <area shape="rect" coords="650,85,699,158" onclick="mostrarlineaActual(2010)" />
          <area shape="rect" coords="700,16,756,88" onclick="mostrarlineaActual(2011)" />
          <area shape="rect" coords="756,85,807,154" onclick="mostrarlineaActual(2012)"/>
          <area shape="rect" coords="807,18,861,87" onclick="mostrarlineaActual(2013)" />
          <area shape="rect" coords="863,87,912,154" onclick="mostrarlineaActual(2014)" />
          <area shape="rect" coords="911,21,967,83" onclick="mostrarlineaActual(2015)" />
		  <area shape="rect" coords="964,81,1025,157" onclick="mostrarlineaActual(2016)" />
    </map>
  
    <div class="col-lg-12 line-time-text" id="texto_linea" style="display:none; height:100%">
      	<div id="anio_1998" style="display:none">
         
               <p><strong>1998</strong></p> 
               <br>
          		<p><span>Premio Vida y Obra:</span> Travesía de la Selva. Aprendizaje de los Kogis por Andrés Hurtado García. </p>
          		<p><span>Primer Lugar: Río Sinú:</span> Dolor de Patria, Meridiano de Córdoba por Rafael Cervantes.</p>
         	    <p><span>Segundo Lugar:</span> Sigue alerta por paso de Buque con Plutonio. Amores en Gorgona,<br /> 
                	Prensa Verde por Martha Goyeneche,  Lina Lozano y  Luis Gabriel David.</p>
          		<p><span>Tercer Lugar:</span> Colombia abre la puerta  a recursos genéticos, El Espectador por Martha Morales.</p>
          		<p><span>Cuarto lugar:</span> Contaminación minera: muerte paulatina del Lilí, El Tiempo – Cali por Gloria Chaparro Soto. </p>
          		<p><span>Quinto lugar:</span> Explotación de la Chonta, Amenaza a Galápagos Bosques de Niebla, <br />
                	Diario Citará (Chocó) por Gonzalo Díaz Cañadas.</p>
          		<p><span>Sexto lugar:</span> Un planeta recalentado, El Tiempo por Ivonne Malaver.</p>
          		 
        </div>
        
        <div id="anio_1999" style="display:none">
          <p><strong>1999</strong></p> 
          <br>
          <p><span>Primer Lugar:</span> Creciendo juntos Los hijos del agua, Periódico El Mundo. </p>
          <p><span>Segundo Lugar:</span> La maldición del oro blanco, Revista Cromos por Héctor Mario Rodríguez Gómez.</p>
          <p><span>Tercer Lugar:</span> Combustible ecológico: transporte público a gas, Prensa Verde por Jorge Bernal Castañeda,<br /> 
          		Lina Patricia Lozano y Jenny Carolina González.</p>

        </div>
        
        <div id="anio_2000" style="display:none">
              <p><strong>2000</strong></p> 
              <br>
          	  <p><span>Primer Lugar:</span> Agonizan los larga vida, El Tiempo por lvonne Malaver.</p>
          	  <p><span>Segundo Lugar:</span> Negocio de verdes, Revista Dinero por Ruth Ramírez Abuabara.</p>
          	  <p><span>Tercer Lugar: </span>Genes a la carta, Revista Cromos por Zaira María Amaya Lesmes.</p>
        </div>
        
        <div id="anio_2001" style="display:none">
			<p><strong>2001</strong></p> 
            <br>
          	<p><span>Primer Lugar:</span> Martes Ecológico, City Noticias por Mauricio Salcedo.</p>
          	<p><span>Segundo Lugar:</span> La cuña salina  ¿entra o no entra?, El Meridiano de Córdoba por Rafael Cervantes Bossio.</p>
          	<p><span>Tercer Lugar:</span> Cambian botellas  por aguacates, El Espectador por David Sosa.</p>

          </div>
          
          <div id="anio_2002" style="display:none">
          	<p><strong>2002</strong></p> 
          	<br>
          	<p><span>Primer Lugar:</span> El relleno sanitario  de Villavicencio, Llano 7 días por Nelson Arturo Ardila.</p>
          	<p><span>Segundo Lugar:</span> Producción limpia,  una vía a la competitividad, La República por Luis Segundo Gámez.</p>
          </div>
          
          <div id="anio_2003" style="display:none">
          	<p><strong>2003</strong></p> 
          	<br>
          	<p><span>Primer Lugar:</span> Ambiente Rentable, Revista Dinero por Carlos Enrique Rodríguez.</p>
          	<p><span>Segundo Lugar:</span> Los niños de la Amapola...  la flor de la Heroína, Revista Cromos por Nelson Freddy Padilla.</p>
            <p><span>Tercer Lugar:</span> Un triple lamento triste, El Meridiano de Córdoba por Rafael Cervantes Bossio.</p>
          </div>
          
          <div id="anio_2004" style="display:none">
          	<p><strong>2004</strong></p> 
          	<br>
          	<p id = "subtitle">Categoría Profesionales</p>
          	<p><span>Primer Lugar:</span> Proyecto NASA, La noche de RCN por Juan Pablo Bieri y Yurany Morales Mora.</p>
          	<p><span>Segundo Lugar:</span> El mito que se volvió realidad para los Embera Katios,<br />
             Emisora Cultural Luis Carlos Galán por Omar Darío Gómez.</p>
          	<p><span>Tercer Lugar:</span> Agua, una fuente de corrupción, El Meridiano de Córdoba por Ginna Piedad Morelo y <br /> 				Rafael Chica Guzmán.
            </p>
			<br />
          	<p id = "subtitle">Categoría Estudiantes</p>
          	<p><span>Primer Lugar:</span> Aves, segunda víctima del tráfico ilegal en Santander, Periódico 15 <br />
            	Universidad Autónoma de Bucaramanga – UNAB por Fabio Soto.
            </p>
          	<p><span>Segundo Lugar:</span> Pueblos sedientos, agua desperdiciada, El Meridiano de Córdoba por Barney David Berrocal.</p>

         </div>
         
         <div id="anio_2005" style="display:none">
          	<p><strong>2005</strong></p> 
          	<br>
          	<p id = "subtitle">Categoría Profesionales</p>
          	<p><span>Primer lugar:</span> Lixiviados de Navarro  envenenan al río Cauca, El País de Cali por César James Polanía.				 			</p>
          	<p><span>Segundo Lugar:</span> La cruz que cargan  las Hicoteas, Emisora Frecuencia Bolivariana de Montería <br /> por Óscar Luis Sánchez Oviedo.</p>
          	<p><span>Tercer Lugar:</span> Naturaleza común, naturalmente vulgar, Periódico UN de la Universidad Nacional <br /> por Paula Andrea Grisales.</p>
			<br /><p id="subtitle">categoría Estudiantes
          	<p><span>Primer lugar:</span> El botadero de Montería,  una bomba de tiempo, El Meridiano de Córdoba por Any Luz Rivero,<br />
            Andrés Reza, María Angélica Garcés,  Juan Guillermo Castro  y César Mercado.</p>
          <p><span>Segundo Lugar: </span>Los Yariguíes,  santuario natural que será  parque nacional, Periódico 15 Universidad Autónoma de Bucaramanga – UNAB por María Astrid Toscano.</p>

        </div>
        
        <div id="anio_2006" style="display:none">
        	<p><strong>2006</strong></p> 
            <br>
          	<p id = "subtitle">Categoría Profesionales</p>
          	<p><span>Primer Lugar: </span>El Caño Bugre agoniza, El Meridiano de Córdoba por Ginna Morelo Martínez <br />
             	y Constanza Bruno Solera.</p>
          	<p><span>Segundo Lugar: </span>Denuncian contaminación ambiental en Fortalecillas, La Nación por Fabián Alejandro Hernández  y <br />
            	Leidy Lorena Gómez.</p>
          <p><span>Tercer Lugar: </span>Agroecología y transgénicos, La Amazonía y sus agentes, El Agua, Radio Calima Todelar <br />
           por Carlos Alberto Ramírez.</p>
		  <br /><p id="subtitle">categoría Estudiantes
          <p><span>Primer Lugar: </span>El fin del oro blanco, Revista Mundo Lector por Miguel Andrés Daza,  Julio Andrés Páez  <br />
          	y Diana Lorena Álvarez.</p>
       </div>
       
       <div id="anio_2007" style="display:none">
          <p><strong>2007</strong></p> 
          <br>
          <p id = "subtitle">Categoría Profesionales</p>
          <p><span>Primer Lugar: </span>La tierra tiene fiebre, La Tarde de Pereira por Equipo Periodístico.</p>
          <p><span>Segundo Lugar (Compartido):</span> ¿Cómo se prepara Colombia para evitar este panorama?,<br />
          		Radiosucesos RCN – Radio por Luisa Pulido Rangel.</p>
          <p><span>Segundo Lugar (Compartido): </span>Problemática de la  Ciénaga de Corralito,<br /> 
          		Corvisión – Televisión por Saúl Emiro Amador Barreto.
          </p>
          
          <p><span>Tercer Lugar:</span> La polémica resolución  que recargó las baterías, El Espectador – Prensa por Norbey Quevedo H.</p>
		  
          <br /><p id="subtitle">categoría Estudiantes
          <p><span>Primer Lugar: Transgénicos en Colombia: </span>desde el tomate hasta la legislación, <br /> 
          		Plaza Capital - Universidad del Rosario- Prensa por Diana Marrela Aristizabal García.
          </p>
          <p><span>Segundo Lugar: </span>Regreso a casa, Carta Universitaria Universidad Nacional <br />
          	por Claudia Janeth Sarmiento de la Universidad Santo Tomás.
          </p>

      </div>
      
      <div id="anio_2008" style="display:none">
          <p><strong>2008</strong></p> 
          <br>
          <p id = "subtitle">Categoría Profesionales</p>
          <br>
          <p><span>Primer Lugar: </span>Lo verde paga, Revista Dinero por Equipo Editorial.</p>
          <p><span>Segundo Lugar:</span> Paramillo, amenazado  e incomprendido, El Meridiano de Córdoba por Ginna Piedad Morelo.</p>
          <p><span>Tercer Lugar: </span>El indulto de Danubio, Emisora Radio Reloj por Marco Fidel Yucumá.</p>
		  
          <br /><p id="subtitle">categoría Estudiantes
          <p><span>Primer Lugar:</span> Reserva Forestal  de San Cristóbal: pronóstico reservado, Revista Directo Bogotá <br /> 			 			por Diana Marcela Garzón Joya de la Pontificia Universidad  Javeriana.
         </p>
     </div>
          
     <div id="anio_2009" style="display:none">
         <p><strong>2009</strong></p> 
         <br>
         <p id = "subtitle">Categoría Profesionales</p>
         <p><span>Primer Lugar: </span>Córdoba, Naturaleza y Vida, Telecaribe por Oscar Sánchez.</p>
         <p><span>Segundo Lugar: </span>Los dragones de Oro, Revista Semana por Carlos Eduardo Huertas.</p>
		 
         <br /><p id="subtitle">Categoría Estudiantes
         <p><span>Primer Lugar: </span>Zona Uniminuto, personajes de cartón y plástico, Universidad Minuto de Dios por Jaime Cortés, <br />
         	Jeisson  Tarquino, Andrés Torres, Andrés Aldana, Paola Bonilla, Iván Torres, Anyela Castillo, Giovanni Ramírez,<br /> 			 		 	Julio  Andrés Páez, Leidy Prieto, Lina María Predilla, Diana Marcela Gómez, Martha  Hernández y Christian  Supelano.
         </p>
         <p><span>Segundo Lugar: </span>Contaminación del agua,  la tierra y el aire de Medellín, Universidad Pontificia Bolivariana <br />
         	de Medellín por Luis Fernando Gutiérrez,  Juan Camilo Olaya  y Mauricio Cardona.</p>

     </div>
     
     <div id="anio_2010" style="display:none">
          <p><strong>2010</strong></p> 
          <br>
          <p id = "subtitle">Categoría Profesionales</p>
          <p><span>Primer Lugar:</span>Entrañas de una cuenca rota, El País por Adonai Cárdenas Castillo, Jessica Villamil  Muñoz,  	<br />
          	Jorge Eliécer Orozco  y Zulma Lucía Cuervo Plazas.</p>
          <p><span>Segundo Lugar:</span> En el corazón de la montaña, Canal C Frecuencia 16 por Carlos Ramírez.</p>
          <p><span>Tercer Lugar:</span> Erosión costera en el litoral caribe como consecuencia del cambio climático,<br />
          	 El Tiempo por Carlos Javier Capella,  Roberto Llanos, Javier Franco, Luz Victoria Martínez, Juan Carlos Diaz,<br /> 	 			 Fausto Pérez Villareal, <br />
             Paola Bejumea, Leonardo Herrera, Guillermo González y Álvaro Oviedo Castillo.</p>

          <p id = "subtitle">Categoría Estudiantes</p>
          <p><span>Primer Lugar:</span> Negados a morir, Universidad  Pontificia  Bolivariana de Montería por David Buelvas, Fabio Puerta, <br />
          	María  Andrea Maroso  y Juan Manuel Banqueth.</p>
       </div>
       
       <div id="anio_2011" style="display:none">
          <p><strong>2011</strong></p> 
          <br>
          <p id = "subtitle">Categoría Profesionales</p>
          <p><span>Primer Lugar:</span>El Oro Verde del Chocó: ¿Una opción para la minería?, Caracol Radio, por Charlotte de Beauvoir  y <br />
          Lorenzo Morales.></p>
          <p><span>Segundo lugar (Compartido):</span> Desastre carbonero: ¿quién responde?, Revista Poder por María Elena Vélez.
          </p>
          <p><span>Segundo lugar (Compartido):</span> Seguimiento a la minería en el Páramo de Santurbán, Periódico 15 por <br />	 				Javier Sandoval Montañez  y Pastor Virviescas Gómez.
          </p>

          <p id = "subtitle">Categoría Estudiantes</p>
          <p><span>Primer Lugar: </span>Santurbán, con el oro hasta el cuello, Universidad Manuela Beltrán por Diego Fernando Calderón,<br /> 
          Danny Stefan Miranda,  Laura Calvete Peña  y Óscar Fernando Delgado.
          Segundo lugar: Uso racional de la energía <br />
          en la cocina, Emisora Radio Bolivariana por Mónica Vélez Gómez.</p>
          </div>
          
          <div id="anio_2012" style="display:none">
          	<p><strong>2012</strong></p> 

          	<p id = "subtitle">Categoría Profesionales</p>
          <p><span>Primer lugar: </span>Entre la minería legal, ilegal y artesanal, Edinson Arley Bolaños de El Espectador.</p>
          <p><span>Segundo lugar: </span>Crónicas Caracol, Caracol Televisión. Por Mauricio Salcedo.</p>
          <p><span>Tercer lugar:</span> El toque de Midas en Santa Cruz, U de C Radio por Martha Patricia Amor Olaya y Luis Mestra Narváez</p>
          <p><span>Menciones de honor: </span>Túnel de oriente: temores y sombras, El Mundo de Medellín
           Red que desangra aguas <br />
            	del Pacífico”, El País’ de Cali,  por Jorge  Eliecer Orozco Galvis
          </p>

          <p id = "subtitle">Categoría Estudiantes</p>
          <p><span>Primer Lugar:</span> El venado locho resiste oculto y temeroso, Universidad Pontificia Bolivariana de Bucaramanga. <br />Por: Diego Sebastián Justinien Serrano Suárez.</p>
          <p><span>Segundo Lugar:</span> El petróleo amenaza a San Andrés, Universidad de la Sabana por Mariana Escobar Roldán.</p>

        </div>
         
        <div id="anio_2013" style="display:none">
           <p><strong>2013</strong></p> 
           <p id = "subtitle">Categoría Profesionales</p><p><span>Primer Lugar:</span>Cuatro años para salvar el agua de Bogotá, Lucevín Gómez.>
          </p>
          <p><span>Segundo Lugar:</span> Turismo Responsable Destino obligado, Claudia Cerón Coral.</p>
          <p><span>Tercer Lugar:</span> Lo que por agua viene por agua se va, Viany Pérez Vargas.</p>
          <p><span>Menciones de honor:</span> Documental Isla Chica Barrio Grande, Antonio Luis Ángel Covo.
           Seguimiento<br /> 
           a la problemática P.H Quimbo: Aguas turbias Quimbo, Francisco Ismael Olaya Olaya.Mercurio hasta donde hay <br />
           que temerle,Edison Arley Bolaños Angulo.
          </p>

          <p id = "subtitle">Categoría Estudiantes</p><p><span>Primer Lugar:</span>Los cazadores de basura, Lubin Daninger Moreno Daza.></p>
          <p><span>Segundo Lugar:</span> Una laguna que exige protección, Kendy Yulay Jaimes Carrillo.</p>
          </div>
          
          <div id="anio_2014" style="display:none">
                  <p><strong>2014</strong></p> 
                  <p id = "subtitle">Categoría Profesionales</p>
                  <p><span>Primer Lugar:</span>"Casanare: el afán por encontrar un culpable”, del Diario El Espectador.</p>
                  <p><span>Segundo Lugar:</span> “Fauna en vía de extinción: los animales hablan” de La Opinión de Cúcuta.</p>
                  <p><span>Tercer Lugar:</span> “El Cocuy, tesoro que se derrite” de El Tiempo.
                  Menciones de Honor: “S.O.S por el río Bogotá” de <br /> 
                  RCN Televisión “A la caza del pez león” de El Heraldo
                  “Minería ilegal de Oro: el viacrucis del Cauca” del <br /> Noticiero 90 Minutos.</p>
                <br />
                  <p id = "subtitle">Categoría Estudiantes</p>
                  <p><span>Primer Lugar:</span>A Cali se le va el agua de las manos”, al estudiante Andrés Felipe Moncada de la <br />
                  	Universidad del Valle</p>

              </div>
              
              <div id="anio_2015" style="display:block">
                  <p id = "anio"><strong>2015</strong></p> 
  				  <p id = "subtitle">Categoría Profesional</p>
                  <p><span>Primer Lugar:</span>
                  “No todo lo que Brilla es Oro” María López, Juanita Rico, <br />
                  	Antonio Paz, Álvaro Pardo, Natalia Borrero, César Moreno, Karem Racines, Juan Francisco Molina, Alejandro Bravo, <br />
                    Juan Montes, Sandra Farfán para Semana Sostenible.
                  </p>
                  <p><span>Segundo lugar: </span>
                  	“Cali, Siete Ríos Heridos” de Luiyith Miguel Melo García para Diario El País
                  </p>
                  <p><span>Tercer lugar:</span> 
                  	“El Mercurio Contamina las Venas de Antioquia” de Santiago Cárdenas Herrera y Manuel Saldarriaga <br />
                    para El Colombiano
                   </p>
                  <p><span>Cuarto Lugar:</span> 
                  	“La Conejera Urbanizada” de Iván Serrano Almeyda para NoticiasUNO
                   </p>
                  <br>
                  <p id = "subtitle">Categoría Estudiantes</u></p>
                  <p><span>Primer Lugar:</span> “Tierra Bomba” de Luis Alberto Hurtado Martínez y Leonardo Mercado Martínez,<br /> 					Universidad Jorge Tadeo Lozano – Seccional Caribe.</p>
                   <p><span>Segundo lugar:</span> “Respira Profundo” de Kelly Sánchez, <br />Universidad del Valle</p>

</div>
         <div id="anio_2016" style="display:block">
                  <p id = "anio"><strong>2016</strong></p> 
  				  <p id = "subtitle">Categoría Profesional</p>
                  <p><span>Primer Lugar:</span>
                  “Minería ilegal: el cáncer de los Farallones” <br />de Hugo Mario Cárdenas López y José Oswaldo Páez para Diario El País
<br />(Cali)
                  </p>
                  <p><span>Segundo lugar: </span>
                  	“Nuestro río en Nuestra Tele” de Yamit Palacio Villa para Noticias RCN (Bogotá)
                  </p>
                  <p><span>Tercer lugar:</span> 
                  	“¿A dónde van a parar?” de Lizeth Viviana Salamanca Galvis para El Tiempo (Bogotá)
                   </p>
                  <br>
                  <p id = "subtitle">Categoría Estudiantes</u></p>
                  <p><span>Primer Lugar:</span> “La caná: la gran viajera sin visa” de Valeria Zapata Giraldo para<br />Universidad EAFIT (Medellín)</p>
                   <p><span>Segundo lugar:</span> “La otra guerra de las selvas” de Joaquín Mauricio López Bejarano para Revista Entre Líneas<br />(Bogotá)</p>

        </div>
      </div>
</div>