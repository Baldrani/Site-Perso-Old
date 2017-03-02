<!DOCTYPE html>
<html>
	<head>
	<title>Maël Mayon - Portefolio -  Javascript</title>
	<?php include('head.php') ?>
	</head>
	<body>	<?php include ('analyticstracking.php'); ?> 
	   	<div class="wrapper">
        <?php include('navbar.php'); ?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Projets Perso de Javascript</h1>
					<em>Passant en ce moment pas mal de temps à développer en Javascript je vais vous présenter mes créations que ce soit pour vous ou pour me rememorer mes difficultées</em>

					<h3>Select Personnalisé</h3>
					<h4>Difficulté : 4 * - Technologies : jQuery</h4> <a href="https://jsfiddle.net/Baldrani/9u59cm31/">JsFiddle</a> (Première version)
					<h5>Dernières mise à jours : 17 Mars 2015</h5>
					<p>La vrai difficulté de ce projet à été de deplacer correctement la fenêtre en fonction du resultat de la recherche tapée</p>
					<h4>Fonctionnalités : Permet de tapper sa recherche pour la selectionner, de descendre ou de remonter avec les flèches et de sélectionner avec enter sa recherche</h4>
					<h4>Fonctions utilisées : <strong><a href="https://api.jquery.com/scrollTop/" alt="jQuery scrollTop()">scrollTop()</a></strong> & <strong><a href="https://api.jquery.com/position/" alt="jQuery position()">position({top : xxx, left : xxx})</a></strong> & <strong><a href="https://api.jquery.com/offset/" alt="jQuery offset">offset({top : xxx, left : xxx})</a></strong></h4>
					<div class="playGround">
						<div class="relative">
				            <div class="custom-select">Sélectionnez une ville de départ</div>
				            <ul class="customSelect">
				              <li class="title not" data-value="TOPDEP"> Top Villes de départ</li>
				              <li class="topDes" data-value="PAR"> Paris</li>
				              <li class="topDes" data-value="LYS"> Lyon</li>
				              <li class="topDes" data-value="NTE"> Nantes</li>
				              <li class="topDes" data-value="MRS"> Marseille</li>
				              <li class="topDes" data-value="TLS"> Toulouse</li>
				              <li class="topDes" data-value="BOD"> Bordeaux</li>
				              <li class="topDes" data-value="LIL"> Lille</li>
				              <li class="separ not" data-value=""></li>
				              <li class="title not" data-value="0">Toute les villes de départ</li>
				              <li data-value="QXB"> Aix en Provence (Gare SNCF)</li>
				              <li data-value="AJA"> Ajaccio</li>                         
				              <li data-value="ANE"> Angers</li>                         
				              <li data-value="QXG"> Angers (Gare SNCF)</li>
				              <li data-value="AVN"> Avignon</li>                         
				              <li data-value="XZN"> Avignon (Gare SNCF)</li>
				              <li data-value="BSL"> Bâle (CH)</li>                         
				              <li data-value="EAP"> Bâle/Mulhouse (CH)</li>
				              <li data-value="BCN"> Barcelone (ES)</li>                      
				              <li data-value="BIA"> Bastia</li>                         
				              <li data-value="EGC"> Bergerac</li>                         
				              <li data-value="BIQ"> Biarritz</li>                         
				              <li data-value="BIO"> Bilbao (ES)</li>  
				              <li data-value="BOD"> Bordeaux</li>                         
				              <li data-value="ZFQ"> Bordeaux (Gare SNCF)</li>
				              <li data-value="BES"> Brest</li>                         
				              <li data-value="BVE"> Brive La Gaillarde</li>
				              <li data-value="BRU"> Bruxelles (BE)</li>                      
				              <li data-value="ZYR"> Bruxelles - (Gare du Midi) (BE)</li>
				              <li data-value="CFR"> Caen</li>                         
				              <li data-value="XIZ"> Champagne-Ardenne (Gare SNCF)</li>
				              <li data-value="CRL"> Charleroi (Aéroport Gosselies) (BE</li>
				              <li data-value="CER"> Cherbourg</li>                         
				              <li data-value="CFE"> Clermont Ferrand</li>
				              <li data-value="DOL"> Deauville</li>                         
				              <li data-value="DLE"> Dole</li>                         
				              <li data-value="FLL"> Fort Lauderdale (US)</li>
				              <li data-value="FRA"> Francfort (DE)</li>
				              <li data-value="XZI"> Gare Lorraine TGV - Metz Nancy</li>
				              <li data-value="GVA"> Genève (CH)</li>                        
				              <li data-value="FKB"> Karlsruhe/Baden Baden (DE)</li>
				              <li data-value="LEH"> Le Havre</li>                         
				              <li data-value="LME"> Le Mans</li>                         
				              <li data-value="ZLN"> Le Mans (Gare SNCF)</li>
				              <li data-value="LGG"> Liège (BE)</li>                         
				              <li data-value="LI"> Lile</li>                         
				              <li data-value="XDB"> Lile (Gare SNCF)</li>
				              <li data-value="LRT"> Lorient</li>                         
				              <li data-value="LDE"> Lourdes</li>                         
				              <li data-value="LUX"> Luxembourg (LU</li>                     
				              <li data-value="LYS"> Lyon</li>                         
				              <li data-value="XYD"> Lyon Part Dieu (Gare SNCF)</li>
				              <li data-value="MRS"> Marseille</li>                         
				              <li data-value="XRF"> Marseille Saint-Charles (Gare SNCF)</li>
				              <li data-value="ETZ"> Metz / Nancy</li>                        
				              <li data-value="MPL"> Montpellier</li>                        
				              <li data-value="XPJ"> Montpellier (Gare SNCF)</li>
				              <li data-value="MLH"> Mulhouse</li>                         
				              <li data-value="NTE"> Nantes</li>                         
				              <li data-value="QJZ"> Nantes (Gare SNCF)</li>
				              <li data-value="NCE"> Nice</li>                         
				              <li data-value="X19"> Nice/Savone</li>                        
				              <li data-value="FNI"> Nimes</li>                         
				              <li data-value="OST"> Ostende (BE)</li>                        
				              <li data-value="PAR"> Paris</li>                         
				              <li data-value="PUF"> Pau</li>                         
				              <li data-value="PGF"> Perpignan</li>                         
				              <li data-value="XOP"> Poitier (Gare SNCF)</li>
				              <li data-value="PIS"> Poitiers</li>                         
				              <li data-value="UIP"> Quimper</li>                         
				              <li data-value="RHE"> Reims</li>                         
				              <li data-value="RNS"> Rennes</li>                         
				              <li data-value="ZFJ"> Rennes (Gare SNCF)</li>
				              <li data-value="RDZ"> Rodez</li>                         
				              <li data-value="SCN"> Saarbruecken (DE</li>
				              <li data-value="XXX"> Sans Transport (XX)</li>
				              <li data-value="EBU"> St Etienne</li>                         
				              <li data-value="SXB"> Strasbourg</li>                         
				              <li data-value="XER"> Strasbourg - Bus Service</li>      
				              <li data-value="XWG"> Strasbourg (Gare SNCF)</li>    
				              <li data-value="STR"> Stuttgart (DE)</li>                      
				              <li data-value="TLN"> Toulon</li>                         
				              <li data-value="TLS"> Toulouse</li>                         
				              <li data-value="TUF"> Tours</li>                         
				              <li data-value="VAF"> Valence</li>                         
				              <li data-value="XHK"> Valence (Gare SNCF)</li>
				              <li data-value="ZRH"> Zurich (CH)</li>
				            </ul>
				            <br>
				        </div>
					</div>
        					<div class="relative">
                    <div class="custom-select">Sélectionnez une destination</div>
                    <!-- .not for unclicable li -->
                    <!-- .topDes for TOP -->
                    <ul class="customSelect" name="countries" id="countries" data-value="country">
                        <li class="title not" data-value="TOPDEP"> Top Destinations</li>
                        <li class="topDes" data-value="224"> Tunisie</li>
                        <li class="topDes" data-value="89"> Grèce</li>
                        <li class="topDes" data-value="68"> Espagne</li>
                        <li class="topDes" data-value="226"> Turquie</li>
                        <li class="topDes" data-value="65"> Egypte</li>
                        <li class="topDes" data-value="138"> Maroc</li>
                        <li class="topDes" data-value="185"> Portugal</li>
                        <li class="topDes" data-value="98"> Croatie</li>
                        <li class="topDes" data-value="61"> Rep Dominicaine</li>
                        <li class="topDes" data-value="261"> Ile Maurice</li>
                        <li class="topDes" data-value="52"> Cap Vert</li>
                        <li class="separ not" data-value=""></li>
                        <li class="title not" data-value="0">Tous les pays</li>
        								<li data-value="1"> Andorre</li>
                        <li data-value="2"> Émirats Arabes Unis</li>
                        <li data-value="3"> Afghanistan</li>
                        <li data-value="4"> Antigua-et-Barbuda</li>
                        <li data-value="5"> Anguilla</li>
                        <li data-value="6"> Albanie</li>
                        <li data-value="7"> Arménie</li>
                        <li data-value="8"> Angola</li>
                        <li data-value="9"> Antarctique</li>
                        <li data-value="10"> Argentine</li>
                        <li data-value="11"> Samoa Américaines</li>
                        <li data-value="12"> Autriche</li>
                        <li data-value="13"> Australie</li>
                        <li data-value="14"> Aruba</li>
                        <li data-value="15"> Îles Åland</li>
                        <li data-value="16"> Azerbaïdjan</li>
                        <li data-value="17"> Bosnie-Herzégovine</li>
                        <li data-value="18"> Barbade</li>
                        <li data-value="19"> Bangladesh</li>
                        <li data-value="20"> Belgique</li>
                        <li data-value="21"> Burkina Faso</li>
                        <li data-value="22"> Bulgarie</li>
                        <li data-value="23"> Bahreïn</li>
                        <li data-value="24"> Burundi</li>
                        <li data-value="25"> Bénin</li>
                        <li data-value="26"> Saint-Barthélemy</li>
                        <li data-value="27"> Bermudes</li>
                        <li data-value="28"> Brunei</li>
                        <li data-value="29"> Bolivie</li>
                        <li data-value="30"> Bonaire</li>
                        <li data-value="31"> Brésil</li>
                        <li data-value="32"> Bahamas</li>
                        <li data-value="33"> Bhoutan</li>
                        <li data-value="34"> Île Bouvet</li>
                        <li data-value="35"> Botswana</li>
                        <li data-value="36"> Biélorussie</li>
                        <li data-value="37"> Belize</li>
                        <li data-value="38"> Canada</li>
                        <li data-value="39"> Îles Cocos</li>
                        <li data-value="40"> République démocratique du Congo</li>
                        <li data-value="41"> Centrafrique</li>
                        <li data-value="42"> Congo</li>
                        <li data-value="43"> Suisse</li>
                        <li data-value="44"> Côte d'Ivoire</li>
                        <li data-value="45"> Îles Cook</li>
                        <li data-value="46"> Chili</li>
                        <li data-value="47"> Cameroun</li>
                        <li data-value="48"> Chine</li>
                        <li data-value="49"> Colombie</li>
                        <li data-value="50"> Costa Rica</li>
                        <li data-value="51"> Cuba</li>
                        <li data-value="53"> Curaçao</li>
                        <li data-value="54"> Île Christmas</li>
                        <li data-value="55"> Chypre</li>
                        <li data-value="56"> République Tchèque</li>
                        <li data-value="57"> Allemagne</li>
                        <li data-value="58"> Djibouti</li>
                        <li data-value="59"> Danemark</li>
                        <li data-value="60"> Dominique</li>
                        <li data-value="62"> Algérie</li>
                        <li data-value="63"> Équateur</li>
                        <li data-value="64"> Estonie</li>
                        <li data-value="66"> Sahara Occidental</li>
                        <li data-value="67"> Érythrée</li>
                        <li data-value="68"> Espagne</li>
                        <li data-value="69"> Éthiopie</li>
                        <li data-value="70"> Finlande</li>
                        <li data-value="71"> Fidji</li>
                        <li data-value="72"> Îles (malvinas) Falkland</li>
                        <li data-value="73"> Micronésie</li>
                        <li data-value="74"> Îles Féroé</li>
                        <li data-value="75"> France</li>
                        <li data-value="76"> Gabon</li>
                        <li data-value="77"> Royaume-Uni</li>
                        <li data-value="78"> Grenade</li>
                        <li data-value="79"> Géorgie</li>
                        <li data-value="80"> Guyane Française</li>
                        <li data-value="81"> Guernsey</li>
                        <li data-value="82"> Ghana</li>
                        <li data-value="83"> Gibraltar</li>
                        <li data-value="84"> Groenland</li>
                        <li data-value="85"> Gambie</li>
                        <li data-value="86"> Guinée</li>
                        <li data-value="87"> Guadeloupe</li>
                        <li data-value="88"> Guinée Équatoriale</li>
                        <li data-value="90"> Géorgie du Sud et les Îles Sandwich du Sud</li>
                        <li data-value="91"> Guatemala</li>
                        <li data-value="92"> Guam</li>
                        <li data-value="93"> Guinée-Bissau</li>
                        <li data-value="94"> Guyana</li>
                        <li data-value="95"> Hong-Kong</li>
                        <li data-value="96"> Îles Heard et Mcdonald</li>
                        <li data-value="97"> Honduras</li>
                        <li data-value="99"> Haïti</li>
                        <li data-value="100"> Hongrie</li>
                        <li data-value="101"> Indonésie</li>
                        <li data-value="102"> Irlande</li>
                        <li data-value="103"> Israël</li>
                        <li data-value="104"> Île de Man</li>
                        <li data-value="105"> Inde</li>
                        <li data-value="106"> Territoire britannique de l'océan Indien</li>
                        <li data-value="107"> Iraq</li>
                        <li data-value="108"> Iran</li>
                        <li data-value="109"> Islande</li>
                        <li data-value="110"> Italie</li>
                        <li data-value="111"> Jersey</li>
                        <li data-value="112"> Jamaïque</li>
                        <li data-value="113"> Jordanie</li>
                        <li data-value="114"> Japon</li>
                        <li data-value="115"> Kenya</li>
                        <li data-value="116"> Kirghizistan</li>
                        <li data-value="117"> Cambodge</li>
                        <li data-value="118"> Kiribati</li>
                        <li data-value="119"> Comores</li>
                        <li data-value="120"> Saint-Kitts-et-Nevis</li>
                        <li data-value="121"> Corée du Nord</li>
                        <li data-value="122"> Corée du Sud</li>
                        <li data-value="123"> Kosovo</li>
                        <li data-value="124"> Koweït</li>
                        <li data-value="125"> Îles Caïmanes</li>
                        <li data-value="126"> Kazakhstan</li>
                        <li data-value="127"> Laos</li>
                        <li data-value="128"> Liban</li>
                        <li data-value="129"> Sainte-Lucie</li>
                        <li data-value="130"> Liechtenstein</li>
                        <li data-value="131"> Sri Lanka</li>
                        <li data-value="132"> Libéria</li>
                        <li data-value="133"> Lesotho</li>
                        <li data-value="134"> Lituanie</li>
                        <li data-value="135"> Luxembourg</li>
                        <li data-value="136"> Lettonie</li>
                        <li data-value="137"> Libye</li>
                        <li data-value="139"> Monaco</li>
                        <li data-value="140"> Moldavie</li>
                        <li data-value="141"> Monténégro</li>
                        <li data-value="142"> Saint-Martin</li>
                        <li data-value="143"> Madagascar</li>
                        <li data-value="144"> Îles Marshall</li>
                        <li data-value="145"> Macédoine</li>
                        <li data-value="146"> Mali</li>
                        <li data-value="147"> Myanmar</li>
                        <li data-value="148"> Mongolie</li>
                        <li data-value="149"> Macao</li>
                        <li data-value="150"> Îles Mariannes du Nord</li>
                        <li data-value="151"> Martinique</li>
                        <li data-value="152"> Mauritanie</li>
                        <li data-value="153"> Montserrat</li>
                        <li data-value="154"> Malte</li>
                        <li data-value="155"> Maurice</li>
                        <li data-value="156"> Maldives</li>
                        <li data-value="157"> Malawi</li>
                        <li data-value="158"> Mexique</li>
                        <li data-value="159"> Malaisie</li>
                        <li data-value="160"> Mozambique</li>
                        <li data-value="161"> Namibie</li>
                        <li data-value="162"> Nouvelle-Calédonie</li>
                        <li data-value="163"> Niger</li>
                        <li data-value="164"> Île Norfolk</li>
                        <li data-value="165"> Nigéria</li>
                        <li data-value="166"> Nicaragua</li>
                        <li data-value="167"> Pays-Bas</li>
                        <li data-value="168"> Norvège</li>
                        <li data-value="169"> Népal</li>
                        <li data-value="170"> Nauru</li>
                        <li data-value="171"> Niué</li>
                        <li data-value="172"> Nouvelle-Zélande</li>
                        <li data-value="173"> Oman</li>
                        <li data-value="174"> Panama</li>
                        <li data-value="175"> Pérou</li>
                        <li data-value="176"> Polynésie Française</li>
                        <li data-value="177"> Papouasie-Nouvelle-Guinée</li>
                        <li data-value="178"> Philippines</li>
                        <li data-value="179"> Pakistan</li>
                        <li data-value="180"> Pologne</li>
                        <li data-value="181"> Saint-Pierre-et-Miquelon</li>
                        <li data-value="182"> Pitcairn</li>
                        <li data-value="183"> Porto Rico</li>
                        <li data-value="186"> Palaos</li>
                        <li data-value="187"> Paraguay</li>
                        <li data-value="188"> Qatar</li>
                        <li data-value="189"> Réunion</li>
                        <li data-value="190"> Roumanie</li>
                        <li data-value="191"> Serbie</li>
                        <li data-value="192"> Russie</li>
                        <li data-value="193"> Rwanda</li>
                        <li data-value="194"> Arabie Saoudite</li>
                        <li data-value="195"> Îles Salomon</li>
                        <li data-value="196"> Seychelles</li>
                        <li data-value="197"> Soudan</li>
                        <li data-value="198"> Soudan du Sud</li>
                        <li data-value="199"> Suède</li>
                        <li data-value="200"> Singapour</li>
                        <li data-value="201"> Sainte-Hélène</li>
                        <li data-value="202"> Slovénie</li>
                        <li data-value="203"> Svalbard etÎle Jan Mayen</li>
                        <li data-value="204"> Slovaquie</li>
                        <li data-value="205"> Sierra Leone</li>
                        <li data-value="206"> Saint-Marin</li>
                        <li data-value="207"> Sénégal</li>
                        <li data-value="208"> Somalie</li>
                        <li data-value="209"> Suriname</li>
                        <li data-value="210"> Sao Tomé-et-Principe</li>
                        <li data-value="211"> El Salvador</li>
                        <li data-value="213"> Syrie</li>
                        <li data-value="214"> Swaziland</li>
                        <li data-value="215"> Îles Turks et Caïques</li>
                        <li data-value="216"> Tchad</li>
                        <li data-value="217"> Terres Australes Françaises</li>
                        <li data-value="218"> Togo</li>
                        <li data-value="219"> Thaïlande</li>
                        <li data-value="220"> Tadjikistan</li>
                        <li data-value="221"> Tokelau</li>
                        <li data-value="222"> Timor oriental</li>
                        <li data-value="223"> Turkménistan</li>
                        <li data-value="224"> Tunisie</li>
                        <li data-value="225"> Tonga</li>
                        <li data-value="227"> Trinité-et-Tobago</li>
                        <li data-value="228"> Tuvalu</li>
                        <li data-value="229"> Taïwan</li>
                        <li data-value="230"> Tanzanie</li>
                        <li data-value="231"> Ukraine</li>
                        <li data-value="232"> Ouganda</li>
                        <li data-value="233"> Îles Mineures Éloignées des États-Unis</li>
                        <li data-value="234"> États-Unis</li>
                        <li data-value="235"> Uruguay</li>
                        <li data-value="236"> Ouzbékistan</li>
                        <li data-value="237"> Vatican</li>
                        <li data-value="238"> Saint-Vincent-et-les Grenadines</li>
                        <li data-value="239"> Venezuela</li>
                        <li data-value="240"> Îles Vierges Britanniques</li>
                        <li data-value="241"> Îles Vierges des États-Unis</li>
                        <li data-value="242"> Viet Nam</li>
                        <li data-value="243"> Vanuatu</li>
                        <li data-value="244"> Wallis et Futuna</li>
                        <li data-value="245"> Samoa</li>
                        <li data-value="246"> Yémen</li>
                        <li data-value="247"> Mayotte</li>
                        <li data-value="248"> Afrique du Sud</li>
                        <li data-value="249"> Zambie</li>
                        <li data-value="250"> Zimbabwe</li>
                        <li data-value="251"> Serbie-et-Monténégro</li>
                        <li data-value="252"> Antilles Néerlandaises</li>
                        <li data-value="253"> Baléares</li>
                        <li data-value="254"> Bali</li>
                        <li data-value="255"> Birmanie</li>
                        <li data-value="256"> Canaries</li>
                        <li data-value="257"> Corfou</li>
                        <li data-value="258"> Corse</li>
                        <li data-value="259"> Crete</li>
                        <li data-value="260"> Cyclades</li>
                        <li data-value="262"> Iles Vierges américaines</li>
                        <li data-value="263"> Polynésie</li>
                        <li data-value="264"> Rhodes</li>
                        <li data-value="265"> Sardaigne</li>
                        <li data-value="266"> Sicile</li>
        							</ul>
                	</div>
					<style type="text/css" media="screen">
						/* line 2166, ../sass/screen.scss */
						.customSelect {
						  margin: 0;
						  padding: 0;
						  position: absolute;
						  top: 0;
						  font-family: Arial;
						  display: none;
						  border: 1px solid #838383;
						  max-height: 300px;
						  overflow-y: auto;
						  overflow-x: hidden;
						  background-color: #F5F5F5;
						  width: 80%;
						  font-size: 13px;
						  z-index: 2;
						}
						/* line 2181, ../sass/screen.scss */
						.customSelect .title {
						  margin-bottom: 0px !important;
						}
						/* line 2184, ../sass/screen.scss */
						.customSelect:hover {
						  cursor: pointer;
						}
						/* line 2187, ../sass/screen.scss */
						.customSelect li:not(.title):not(.separ):hover {
						  background-color: #3399ff;
						  color: white;
						}
						/* line 2191, ../sass/screen.scss */
						.customSelect .title:hover {
						  background-color: none;
						}

						/* line 2196, ../sass/screen.scss */
						.separ:hover {
						  background-color: none;
						}

						/* line 2201, ../sass/screen.scss */
						.customSelect > li:not(.topDes) {
						  padding-left: 10px;
						}
						/* line 2204, ../sass/screen.scss */
						.customSelect li {
						  position: relative;
						  list-style: none;
						  line-height: 25px;
						  left: 0;
						  top: 0;
						}

						/* line 2213, ../sass/screen.scss */
						.separ {
						  height: 10px;
						}

						/* line 2217, ../sass/screen.scss */
						.title {
						  font-weight: 900;
						}

						/* line 2221, ../sass/screen.scss */
						.topDes:before {
						  content: "TOP";
						  float: left;
						  color: White;
						  background: #fdb714;
						  font-size: 12px;
						  padding: 0px 5px;
						  margin-right: 10px;
						}

						/* line 2231, ../sass/screen.scss */
						.custom-select {
						  background-color: #F5F5F5;
						  color: #838383;
						  display: inline-block;
						  line-height: 32px;
						  padding: 0 10px;
						  position: relative;
						  width: 80%;
						  overflow: hidden;
						  white-space: nowrap;
						  cursor: pointer;
						  font-family: Arial;
						}
						/* line 2243, ../sass/screen.scss */
						.custom-select:before {
						  position: absolute;
						  right: 0;
						  top: 0;
						  content: '';
						  background: #00aadb;
						  width: 30px;
						  height: 100%;
						}
						/* line 2252, ../sass/screen.scss */
						.custom-select:after {
						  position: absolute;
						  right: 11px;
						  top: 13px;
						  border-top: 6px solid #fff;
						  border-left: 4px solid transparent;
						  border-right: 4px solid transparent;
						  content: "";
						}
						/* line 2261, ../sass/screen.scss */
						.custom-select #cities {
						  pointer-events: none;
						}

						/* custom Select End */
						/* line 2270, ../sass/screen.scss */
						.search-box-wrapper.style1 .search-box > ul.search-tabs li:nth-of-type(4) > a {
						  padding-top: 10px;
						  line-height: 20px;
						  text-align: center;
						}
						/* line 2275, ../sass/screen.scss */
						.search-box-wrapper.style1 .search-box > ul.search-tabs li:nth-of-type(4).active > a:after {
						  position: relative;
						  top: -9px;
						  left: 34px;
						}
						/* line 2280, ../sass/screen.scss */
						.search-box-wrapper.style1 .search-box > ul.search-tabs li:nth-of-type(4) > a > i {
						  padding-top: 7px;
						}
						/* line 2285, ../sass/screen.scss */
						.search-box-wrapper.style1 .search-box > ul.search-tabs li:nth-of-type(5) > a {
						  padding-top: 10px;
						  line-height: 20px;
						  text-align: center;
						}
						/* line 2289, ../sass/screen.scss */
						.search-box-wrapper.style1 .search-box > ul.search-tabs li:nth-of-type(5) > a > i {
						  padding-top: 7px;
						}
						/* line 2293, ../sass/screen.scss */
						.search-box-wrapper.style1 .search-box > ul.search-tabs li:nth-of-type(5).active > a:after {
						  position: relative;
						  right: -25px;
						  top: -10px;
						}
						
						.hoverLi:not(.not){  
						    background-color:#3399ff;
						    color: white;
						}
					</style>
					<script type="text/javascript" charset="utf-8" async defer>
						$('.custom-select').click(function(){
						    $('ul>li:not(.not)').removeClass('hoverLi');
						    var toScroll = $(this).next('.customSelect');
						    var res = "";
						    document.onkeydown = f;
						    function f(e){
						    if (e.keyCode == 8){
						      	e.preventDefault();
						      	res = "";
						    } else if (e.keyCode == 13) { // Enter
									if($('li:not(".not")').hasClass('hoverLi')){
						      	$('.clicked').text($('.hoverLi').text());
						        $('.customSelect:visible').fadeOut(350);
						        $('.clicked').removeClass('clicked');
									}
						    } else if (e.keyCode == 40){ //Down
						    	e.preventDefault();
						      	scrollDown();
						    } else if (e.keyCode == 38){ //Up
						    	e.preventDefault();
						    	scrollUp();
						    } else if(e.keyCode >= 65 && e.keyCode <= 90){
						    	res += String.fromCharCode(e.keyCode);
							   	 scrollToLi(search(res));
						    } 
						}
						  
						  /* Tri les correspondances et affiche la première */
						  function search(res){
						  	$('ul>li:not(.not)').removeClass('hoverLi');
						  	var matchedVille = [];
						    matchedVille = $('ul>li:not(.not)').filter(function(){
						    	var regExp = new RegExp ("^ "+res.toLowerCase().sansAccent());
						    	return this.innerHTML.toLowerCase().sansAccent().match(regExp);
						    });
						    $(matchedVille[0]).addClass('hoverLi');
						    return
						  }

							/* Retrait des accents */
							String.prototype.sansAccent = function(){
								var accent = [
					      /[\300-\306]/g, /[\340-\346]/g, // A, a
					      /[\310-\311-\312-\313]/g, /[\350-\351-\352-\353]/g, // E, e
					      /[\314-\317]/g, /[\354-\357]/g, // I, i
					      /[\322-\330]/g, /[\362-\370]/g, // O, o
					      /[\331-\334]/g, /[\371-\374]/g, // U, u
					      /[\321]/g, /[\361]/g, // N, n
					      /[\307]/g, /[\347]/g, // C, c
						    ];
						    var noaccent = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'];
						    var str = this;
						    for(var i = 0; i < accent.length; i++){
						        str = str.replace(accent[i], noaccent[i]);
						    }     
						    return str;
						}
						  
							/* Scroll au niveau de la recherche */
							function scrollToLi(res){
								toScroll.scrollTop(toScroll.scrollTop() + $('.hoverLi').position().top)
							}

							function scrollDown(){
							    $('li').each(function(){
									if($(this).hasClass('hoverLi'))
									{
							      		$(this).next().addClass('hoverLi')
										$(this).removeClass('hoverLi')
										return false;
							      	}
							    })
							    toScroll.scrollTop(toScroll.scrollTop() + $('.hoverLi').position().top)
						  }
						  
							function scrollUp(){
								$('li').each(function(){
									if($(this).hasClass('hoverLi'))
									{
										$this = $('.hoverLi')
										$('.hoverLi').removeClass('hoverLi')
										$this.prev().addClass('hoverLi')
						      		}
						    	})
								toScroll.scrollTop(toScroll.scrollTop() + $('.hoverLi').position().top)
						  }  

						})

						/*~~~~~~~~~~~~Affichage ~~~~~~~~*/
						$(document).ready(function() {
						    $('.custom-select').click(function(e){
										$this = $(this)
						        e.stopPropagation();
						        $('.customSelect:visible').fadeOut(350);
						        $('.clicked').removeClass('clicked');
						        $(this).next($('.customSelect')).fadeIn(350);
										$(this).next($('.customSelect')).find('li').each(function(){
						        	if($(this).text() == $this.text()) $(this).addClass('hoverLi')
						        })
						        $(this).addClass('clicked');
						    });

						    $('body').click(function(e){
						        $('.customSelect:visible').fadeOut(350);
						    });  

						    $(document).on('click','li:not(.not)',function(){
						        $('.clicked').text($(this).text());
						        $('.clicked').removeClass('clicked');
						    });    
						});
						jQuery(document).ready(afficheSelect);  /* Fonction d'affichage des valeurs séléctionnés (propre au theme) */
					    function afficheSelect(){
					        $('select').on('keyup change', function(){
					            $(this).next('span').empty(); /* Vide le span en cas de changement */ 
					            $(this).next('span').append($(this).find('option:selected').text()); /* Affiche le numéro sélectionné */
					        });
					    }	
					</script>
<pre class="line-numbers"><code class="language-javascript">$('.custom-select').click(function(){
	$('ul>li:not(.not)').removeClass('hoverLi');
	var toScroll = $(this).next('.customSelect');
	var res = "";
	document.onkeydown = f;
	function f(e){
		if (e.keyCode == 8){
			e.preventDefault();
			res = "";
		} else if (e.keyCode == 13) { // Enter
			if($('li:not(".not")').hasClass('hoverLi')){
				$('.clicked').text($('.hoverLi').text());
				$('.customSelect:visible').fadeOut(350);
				$('.clicked').removeClass('clicked');
			}
		} else if (e.keyCode == 40) { //Down
			e.preventDefault();
			scrollDown();
		} else if (e.keyCode == 38) { //Up
			e.preventDefault();
			scrollUp();
    } else if(e.keyCode >= 65 && e.keyCode <= 90){
    	res += String.fromCharCode(e.keyCode);
	   	 scrollToLi(search(res));
    } 
	}

	/* Tri les correspondances et affiche la première */
	function search(res){
		$('ul>li:not(.not)').removeClass('hoverLi');
		var matchedVille = [];
		matchedVille = $('ul>li:not(.not)').filter(function(){
			var regExp = new RegExp ("^ "+res.toLowerCase().sansAccent());
			return this.innerHTML.toLowerCase().sansAccent().match(regExp);
		});
		$(matchedVille[0]).addClass('hoverLi');
		return
	}

	/* Retrait des accents */
	String.prototype.sansAccent = function(){
		var accent = [
    	/[\300-\306]/g, /[\340-\346]/g, // A, a
    	/[\310-\311-\312-\313]/g, /[\350-\351-\352-\353]/g, // E, e
    	/[\314-\317]/g, /[\354-\357]/g, // I, i
    	/[\322-\330]/g, /[\362-\370]/g, // O, o
    	/[\331-\334]/g, /[\371-\374]/g, // U, u
    	/[\321]/g, /[\361]/g, // N, n
    	/[\307]/g, /[\347]/g, // C, c
		];
		var noaccent = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'];
		var str = this;
		for(var i = 0; i < accent.length; i++){
			str = str.replace(accent[i], noaccent[i]);
		}     
	return str;
	}

	/* Scroll au niveau de la recherche */
	function scrollToLi(res){
		toScroll.scrollTop(toScroll.scrollTop() + $('.hoverLi').position().top)
	}
	
	/* Scroll avec les touches directionnelles */
	function scrollDown(){
		$('li').each(function(){
			if($(this).hasClass('hoverLi'))
			{
				$(this).next().addClass('hoverLi')
				$(this).removeClass('hoverLi')
				return false;
			}
		})
		toScroll.scrollTop(toScroll.scrollTop() + $('.hoverLi').position().top)
	}
	function scrollUp(){
		$('li').each(function(){
			if($(this).hasClass('hoverLi'))
			{
				$this = $('.hoverLi')
				$('.hoverLi').removeClass('hoverLi')
				$this.prev().addClass('hoverLi')
			}
		})
		toScroll.scrollTop(toScroll.scrollTop() + $('.hoverLi').position().top)
	}  
})

/*~~~~~~~~~~~~Affichage ~~~~~~~~*/
$(document).ready(function() {
	$('.custom-select').click(function(e){
		$this = $(this)
		e.stopPropagation();
		$('.customSelect:visible').fadeOut(350);
		$('.clicked').removeClass('clicked');
		$(this).next($('.customSelect')).fadeIn(350);
		$(this).next($('.customSelect')).find('li').each(function(){
			if($(this).text() == $this.text()) $(this).addClass('hoverLi')
		})
		$(this).addClass('clicked');
	});

	$('body').click(function(e){
		$('.customSelect:visible').fadeOut(350);
	});  

	$(document).on('click','li:not(.not)',function(){
		$('.clicked').text($(this).text());
		$('.clicked').removeClass('clicked');
	});    
});
jQuery(document).ready(afficheSelect);  /* Fonction d'affichage des valeurs séléctionnés (propre au theme) */
function afficheSelect(){
	$('select').on('keyup change', function(){
		$(this).next('span').empty(); /* Vide le span en cas de changement */ 
		$(this).next('span').append($(this).find('option:selected').text()); /* Affiche le numéro sélectionné */
	});
}</code></pre>
				</div>
			</div>
        </div>
    <div class="push"></div>
    </div>
    <div class="footer">
        <?php include ('footer.php'); ?>
    </div>
	</body>
</html>