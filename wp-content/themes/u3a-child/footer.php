<?php
/**
 * Footer template for U3A Townsville
 */
?>

<footer class="u3a-footer">
  <div class="footer-container">
    <div class="footer-column">
      <h4>Contact Us</h4>
      <p>U3A Townsville Inc.<br>
      Vincent Campus<br>
      15 Patrick Street, Vincent QLD 4814</p>
      <p><strong>Email:</strong> <a href="mailto:info@u3atownsville.org.au">info@u3atownsville.org.au</a><br>
         <strong>Phone:</strong> (07) 4724 3530</p>
    </div>

    <div class="footer-column">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="/join">Join / Renew</a></li>
        <li><a href="/newsletters">Newsletters</a></li>
        <li><a href="/volunteer">Volunteer</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>Office Hours</h4>
      <p>Monday – Friday<br>9:00 AM – 12:00 PM</p>
      <h4>Follow Us</h4>
      <p>Coming soon</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo date('Y'); ?> U3A Townsville Inc. All rights reserved.</p>
  </div>
</footer>

<style>
.u3a-footer {
  background-color: #003b80;
  color: white;
  padding: 40px 20px 20px;
  font-size: 0.95rem;
}

.footer-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
}

.footer-column {
  flex: 1 1 250px;
}

.footer-column h4 {
  color: #ffc107;
  margin-bottom: 10px;
  font-size: 1.1rem;
}

.footer-column ul {
  list-style: none;
  padding-left: 0;
  margin: 0;
}

.footer-column ul li {
  margin-bottom: 6px;
}

.footer-column a {
  color: white;
  text-decoration: none;
}

.footer-column a:hover {
  text-decoration: underline;
}

.footer-bottom {
  border-top: 1px solid rgba(255,255,255,0.2);
  text-align: center;
  margin-top: 30px;
  padding-top: 15px;
  font-size: 0.85rem;
}

@media screen and (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    gap: 20px;
  }
}
</style>
