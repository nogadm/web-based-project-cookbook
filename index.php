<?php require_once("parts/header.php"); ?>
<?php
$user_name = $_GET['user_name'];
//logged in user can view index page
if(isset($_SESSION["user_email"])): ?>
    <div class="container mt-md-3 mt-3 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3">
        <p class="fw-bold fs-5 text-info">שלום <?=$user_name ?>, ברוך הבא לאתר!</p>
    </div>
<?php endif;
//if user is not logged in, go to login page
if (!isset($_SESSION["user_email"])): 
header('Location: login.php');
exit;
endif;?>
<main>
    <section class="container text-center mt-md-5 mt-5 mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3">
        <!-- site description -->
        <div class="container">
            <h1 class="fs-1">המתכון שלי</h1>
            <p class="fs-4">מתכונים מנצחים מהמאגר הגדול שלנו. מפה תוכלו לנווט לכל סוג מתכון שתחפצו. סלטים, ממולאים, תבשילים, מרקים, מתכונים טבעוניים, צמחוניים, קינוחים ועוד. מיטב השפים בישראל ממתינים לכם עם אוסף של מתכונים מדוייקים ומוצלחים שיהפכו אתכם לבשלנים מצטיינים.</p>
        </div>
        <!-- 3 recomended recpies of the week -->
        <div class="container mt-md-5 mt-5 pt-md-3 pt-3">
            <h2>מתכוני השבוע:</h2>
        </div>
        <div class="container  mb-md-5 mb-5 pt-md-3 pt-3 pb-md-3 pb-3">
            <div class="row">
            <div class="col-lg-4">
                <img src="images/recpies/2.jpg" class="img-fluid img-thumbnail" style="width: 10em">
                <h2>עוגת תפוחים</h2>
                <p>היא פשוטה להכנה, אבל היא טעימה באופן שערורייתי. אם מגישים את עוגת התפוחים הבחושה הזו חמה עם קצפת מתובלת בקינמון והל היא בכלל הופכת לקינוח משוחת</p>
                <p><a class="btn btn-outline-secondary" href="#">הצג מתכון &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="images/recpies/3.jpg" class="img-fluid img-thumbnail" style="width: 10em">
                <h2>סקונס</h2>
                <p>יצא לכם כבר לטעום סקונס? אין לכם מושג מה זה? סקונס זה לחמניות חמאה מפורסמות מאנגליה, פשוטות ומהירות הכנה, שהכי טעים להגיש עם תוספת חמאה וריבה</p>
                <p><a class="btn btn-outline-secondary" href="#">הצג מתכון &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="images/recpies/4.jpg" class="img-fluid img-thumbnail" style="width: 10em">
                <h2>לחם תירס</h2>
                <p>רגע לפני שבאמריקה חוגגים את יום העצמאות - קבלו מתכון אותנטי ללחם תירס שידרוש מכם חמש דקות הכנה ועוד חצי שעה של אפייה</p>
                <p><a class="btn btn-outline-secondary" href="#">הצג מתכון &raquo;</a></p>
            </div>
            </div>
</main>
<?php require_once("parts/footer.php");?>