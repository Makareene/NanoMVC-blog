<article class="article">
  <h1>🔑 Telegram Unified Auth</h1>
  <p class="meta">A minimal PHP solution for authenticating users via Telegram Login Widget and Mini Apps with a single unified flow.</p>

  <h2>Overview</h2>
  <p>
    <strong>Telegram Unified Auth</strong> is a lightweight PHP implementation that handles Telegram authentication for both the Login Widget and Mini Apps (WebApp).
    It automatically validates signatures, checks expiration, and stores user data in a unified format — all in a single class.
  </p>

  <h2>What This Project Offers</h2>
  <ul>
    <li>Unified authentication flow for both Widget and Mini Apps</li>
    <li>Automatic detection of authentication source</li>
    <li>Signature verification with `hash_equals`</li>
    <li>Auth date expiration check (5 minutes)</li>
    <li>Stores user data into PHP session</li>
    <li>No external dependencies — only jQuery required on frontend</li>
  </ul>

  <h2>File Structure</h2>
  <pre><code>index.php    # Entry point, shows login UI or user info
webapp.php   # Mini App automatic authentication
auth.php     # TelegramUnifiedAuth class
logout.php   # Session logout</code></pre>

  <h2>How Authentication Works</h2>

  <h3>1. index.php — Entry Point</h3>
  <ul>
    <li>If the user is <strong>not authenticated</strong>, the page automatically detects the environment:
      <ul>
        <li>Outside Telegram → shows Telegram Login Widget</li>
        <li>Inside Telegram Mini App → shows “Log in via Telegram Mini App” button</li>
      </ul>
    </li>
    <li>If the user <strong>is authenticated</strong>, basic user info from the session is displayed</li>
  </ul>

  <h3>2. Telegram Login Widget Flow</h3>
  <ol>
    <li>User clicks the Telegram Login Widget</li>
    <li>Telegram sends user data to the JavaScript callback</li>
    <li>AJAX sends the data to <code>webapp.php</code></li>
    <li><code>TelegramUnifiedAuth</code> validates the signature and expiration</li>
    <li>User info is stored in PHP session</li>
    <li>Page reloads with user info displayed</li>
  </ol>

  <h3>3. Telegram Mini App (WebApp) Flow</h3>
  <p>Two methods are supported:</p>

  <h4>Manual (via button)</h4>
  <ul>
    <li>User opens the site inside Telegram</li>
    <li>Clicks “Log in via Telegram Mini App”</li>
    <li>Redirects to <code>webapp.php</code></li>
  </ul>

  <h4>Automatic (recommended)</h4>
  <ul>
    <li>User opens <code>webapp.php</code> directly via your bot link</li>
    <li>Authentication happens automatically</li>
    <li>User is redirected back to <code>/</code></li>
  </ul>

  <h2>initData (Telegram Mini App)</h2>
  <p>Mini Apps provide authentication data via:</p>
  <pre><code>Telegram.WebApp.initData</code></pre>
  <p><strong>Important:</strong></p>
  <ul>
    <li>Data is a query string, not JSON</li>
    <li>Automatically converted into an array by the class</li>
    <li>Signature verification follows Telegram’s docs</li>
    <li>Expiration time is 5 minutes</li>
  </ul>
  <p>Send it as-is via AJAX:</p>
  <pre><code>$.post('/webapp.php', { user: Telegram.WebApp.initData });</code></pre>

  <h2>Session Data Format</h2>
  <pre><code>$_SESSION['tg_user'] = [
  'id'         => int,
  'first_name' => string,
  'last_name'  => string,
  'username'   => string,
  'photo_url'  => string
];</code></pre>
  <p>Format is identical for both Widget and Mini App.</p>

  <h2>Security Notes</h2>
  <ul>
    <li>Signature verification uses <code>hash_equals</code></li>
    <li>Expired data is rejected</li>
    <li>Invalid signatures return HTTP 403</li>
    <li>No third-party backend dependencies</li>
    <li>Frontend only requires jQuery</li>
  </ul>

  <h2>Requirements</h2>
  <ul>
    <li>PHP 8.0+</li>
    <li>HTTPS (required by Telegram)</li>
    <li>Telegram Bot token</li>
  </ul>

  <h2>License & Author</h2>
  <p>MIT License — see <code>LICENSE</code> file</p>
  <p>Author: <strong>Nipaa</strong><br>
  GitHub: <a href="https://github.com/Makareene/Telegram-Unified-Auth" target="_blank" rel="noopener">https://github.com/&#8203;Makareene/Telegram-&#8203;Unified-Auth</a></p>

  <p class="note">This implementation is minimal and readable — perfect for learning, audits, or integrating into your PHP project with a unified Telegram authentication flow.</p>
</article>
