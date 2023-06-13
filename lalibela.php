<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="home.css">
</head>

<body>
  <div class="menu-bar">
    <h3>Yegna tour</h3>
    <ul>
      <li class="active"><a href="abcd.html">Home</a></li>
      <li><a href="contact.html">Contact us</a></li>
      <li><a href="#">Book</a>
        <div class="sub-menu-1">
          <ul>
            <li><a href="gonder.html">Gonder</a></li>
            <li><a href="axum.html">Axum</a></li>
            <li><a href="lalibela.html">Lalibela</a></li>
            <li><a href="dallole.html">Dallol</a></li>
            <li><a href="semen.html">Simien mountain</a></li>
            <li><a href="bahirdar.html">Bahirdar</a></li>
          </ul>
        </div>
      </li>
      <li><a href="gallery.html">Gallery</a></li>
    </ul>
  </div>
  <h2>Lalibela</h2>
  <div class="both">
    <div class="image">
      <img src="picture/lali.1.jpg" width="600" height="450">
    </div>
    <div class="text">
      <p>
        Lalibela is a town in the Amhara region
        of northern Ethiopia. It's known for its
        distinctive rock-cut churches dating
        from the 12th and 13th centuries, which
        are pilgrimage sites for Coptic
        Christians. Carved out of rock, the
        subterranean monoliths include huge
        Bete Medhane Alem, and cross-shaped
        Bete Giyorgis. Many are joined by
        tunnels and trenches, and some have
        carvedbas-reliefs and colored frescoes inside.
        There is something intensely wonderful and spiritual about
        Lalibela, a truly amazing town located in the northern region
        of Ethiopia. This small village is a World Heritage sites
        acclaimed for its rock-hewn churches, stunning rural
        landscape, and devout Christianity. If faith is a mystery,
        there are few places in the Christian world where the mystery
        is deeper than in Lalibela. King Lalibela is believed to
        have ordered the building of 11 extraordinary churches at
        the end of the 11th century and beginning of the 12th.
        The eleven churches were each carved from a single,
        gigantic, block of stone.

      </p><br><br>
    </div>
  </div>
  <div class="both">
    <div class="image">
      <img src="picture/lali.2.jpg" width="600" height="300">
    </div>
    <div class="text">
      <p>
        Lalibela is a religious center in north-central Ethiopia. It is famous for its unique Christian churches, built
        about 800 years ago.
        Each of the 11 churches was carved out of solid rock. Every year thousands of pilgrims and tourists visit the
        churches.

        The rock churches of Lalibela were built underground. Each church was cut from solid, red granite.
        Workers first dug deep trenches around large blocks of rock. Then they shaped the blocks from the top down.
        They carved out steps, doors, and windows.
        They decorated the churches with arched ceilings and other artistic shapes.
        No bricks, no mortar, no concrete, no lumber, just rock sculpted into architecture.
        Not much is known about who built them, or why. But the
        faithful of the Ethiopian Orthodox Church say there is no
        mystery really. The churches of Lalibela were built by ngels!
      </p>
    </div>
  </div>

  <div class="book">
    <form class="form" action="yenga.php" method="POST">
      <div class="conent">
        <h1 style="color:goldenrod; text-align: center; margin-top: 10px;">Book Now </h1>
        <div class="first-block">
          <div class="element">
            <input type="text" id="fname" placeholder="Firts Name" name="fname">
            <span class="error"><?php echo $fnameerr; ?></span>
          </div>
          <div class="element">
            <input type="text" id="lname" placeholder="Last Name" name="lname">
          </div>
          <div class="element">
            <input type="email" id="email" placeholder="E-mail" name="email">
          </div>
          <div class="element">
            <input type="number" id="pnumber" placeholder="Phone number" name="phone">
          </div>
          <div class="element">
            <select id="price" name="price">
              <option value="">Total Price</option>
              <option value="">Day $210,1 person</option>
              <option value="">3 Day $500,1 prson</option>
              <option value="">1 Week $1200,1 person</option>
              <option value="">2 Week $3300,1 person</option>
            </select>
          </div>
        </div>
        <div class="second-block">
          <div class="element">
            <input type="text" id="dpdate" placeholder="Departur Date" onfocus="(this.type='date')" name="dpdate">
          </div>
          <div class="element">
            <input type="text" id="rdate" placeholder="Return Date" onfocus="(this.type='date')" name="returndate">
          </div>
          <div class="element">
            <input type="number" id="nperson" placeholder="Number of passenger" name="person">
          </div>
          <div class="element">
            <select id="rtype" name="roomtype">
              <option value="">Room type</option>
              <option value="">Single Room</option>
              <option value="">Double Room</option>
              <option value="">Twin Room</option>
              <option value="">Queen Room</option>
              <option value="">King Room</option>
            </select>
          </div>
          <div class="element">
            <select id="room" name="hotel">
              <option value="">Hotel</option>
              <option value="">Dabi Hotel and Aparment</option>
              <option value="">Celeste Ehiopia Hotel</option>
              <option value="">Tolip Olompia Hotel</option>
              <option value="">HeRa Addis Hotel</option>

            </select>
          </div>
        </div>
      </div>
      <input type="submit" value="Book" class="final" name="submit" onclick="validation();">
  </div>
  </form>
  </div>
  <!-- <script type="text/javascript">
    function validation() {
      var F, L, E, P, DP, RD, NP, R;
      F = document.getElementById('fname').value;
      L = document.getElementById('lname').value;
      E = document.getElementById('email').value;
      P = document.getElementById('pnumber').value;
      DP = document.getElementById('dpdate').value;
      RD = document.getElementById('rdate').value;
      NP = document.getElementById('nperson').value;
      R = document.getElementById('room').value;

      if (F == '' || L == '' || E == '' || P == '' || DP == '' || RD == '' || NP == '' || R == '')
        alert("please fill all the detail for booking")
    }
  </script> -->
  <div class="con">
    <div class="text">
      <pre>
     <h3>Attractions</h3>
        <p>
    <a href="gonder.html">Gonder</a>
    <a href="axum.html">Axum</a>
    <a href="lalibela.php">Lalibela</a>
    <a href="semen.html">Simien mountain</a>
    <a href="dallole.html">Danakil depression</a>
    <a href="bahirdar.html">Bahirdar</a>
        </p>
        </pre>
    </div>
    <div class="text">
      <pre>
  <h3>Links</h3>
  <p>
  <a href="abcd.html">Home</a>
  <a href="gallery.html">Gallery</a>
  <a href="contact.html">Contact us</a>
     </p>
  </pre>
    </div>
    <div class="text">
      <pre>
   <h3>Contact us</h3>
<p>
  +251 929 04 11 82
  <a href="mailto:wnigest@gmail.com">yenga@gmail.com</a>
  Bahirdar signalmol

</pre>

    </div>

  </div>
</body>

</html>