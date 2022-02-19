<ul class="menu-main">
  <li><a href="index.php" class="current">Home</a></li>
  <li><a href="form.php">Add</a></li>
  <li><a href="spisok.php">Table view</a></li>
  <li><a href="/admin/">Admin</a></li>
</ul>
<style>

@import url('https://fonts.googleapis.com/css?family=PT+Sans+Caption');
.top-menu {
  margin: 0 60px;
  position: relative;
  background: #5A394E;    
  box-shadow: 
    inset 1px 0 0 rgba(255,255,255,.1), 
    inset -1px 0 0 rgba(255,255,255,.1), 
    inset 150px 0 150px -150px rgba(255,255,255,.12), 
    inset -150px 0 150px -150px rgba(255,255,255,.12);
}
.top-menu:before,
.top-menu:after {
  content: "";
  position: absolute;
  z-index: 2;
  left: 0;
  width: 100%;
  height: 3px;
}
.top-menu:before {
  top: 0;
  border-bottom: 1px dashed rgba(255,255,255,.2);
}
.top-menu:after {
  bottom: 0;
  border-top: 1px dashed rgba(255,255,255,.2);
}
.menu-main {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: center;
}
.menu-main:before, 
.menu-main:after {
  content: "";
  position: absolute;
  width: 50px;
  height: 0;
  top: 8px;
  border-top: 18px solid #5A394E;
  border-bottom: 18px solid #5A394E;
  transform: rotate(360deg);
  z-index: -1;
}
.menu-main:before {
  left: -30px;
  border-left: 12px solid rgba(255, 255, 255, 0);
}
.menu-main:after {
  right: -30px;
  border-right: 12px solid rgba(255, 255, 255, 0);
}
.menu-main li {
  display: inline-block;
  margin-right: -4px;
}
.menu-main a {
  text-decoration: none;
  display: inline-block;
  padding: 15px 30px;
  font-family: 'PT Sans Caption', sans-serif;
  color: white;
  transition: .3s linear;
}
.menu-main a.current,
.menu-main a:hover {background: rgba(0,0,0,.2);}
@media (max-width: 680px) {
.top-menu {margin: 0;}
.menu-main li {
  display: block;
  margin-right: 0;
}
.menu-main:before, 
.menu-main:after {content: none;}
.menu-main a {display: block;}
}
</style>
<a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
<img width="20" src="https://cdn.icon-icons.com/icons2/916/PNG/512/Menu_icon_icon-icons.com_71858.png"; alt="">
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header">
<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
<div>
<ul >
<li><a class="dropdown-item" href="index.php">Home</a></li>
<li><a class="dropdown-item" href="form.php">Add</a></li>
<li><a class="dropdown-item" href="spisok.php">Table view</a></li>
<li><a class="dropdown-item" href="/admin/">Admin</a></li>
</ul>
</div>
</div>
</div>
