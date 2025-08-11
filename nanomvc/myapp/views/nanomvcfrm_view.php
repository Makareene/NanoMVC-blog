      <section class="article">
        <article>
          <h1>🐘 NanoMVC Framework</h1>
          <p class="meta">A minimalist and lightweight PHP MVC framework inspired by TinyMVC — use it for small to medium projects with minimal configuration.</p>

          <h2>Overview</h2>

          <p>
            <strong>NanoMVC</strong> is a cleaned-up, modernized fork of the original TinyMVC framework. It keeps the original simplicity and structure while updating internals for PHP 8.3+ and adding pragmatic enhancements. NanoMVC is intended for developers who prefer control, clarity, and a lightweight foundation rather than a large, opinionated stack.
          </p>

          <h2>What NanoMVC Gives You</h2>

          <ul>
            <li>Clear MVC separation (Model — View — Controller)</li>
            <li>PDO-based database layer (MySQL, PostgreSQL with port/schema support)</li>
            <li>Simple plugin system for extensions and helpers</li>
            <li>Safe customization points so you can extend core behavior without forking it permanently</li>
          </ul>

          <h2>What NanoMVC Is Not</h2>
          <p>
          NanoMVC is <em>not</em> a full-stack framework like Laravel or Symfony. It intentionally avoids large built-in subsystems (ORMs, queues, heavy middleware). Instead it focuses on being predictable, small, and extensible.
          </p>

          <h2>Key Features</h2>

          <ul>
            <li>Minimalist — no unnecessary complexity or dependencies.</li>
            <li>PHP 8.3+ ready — modern syntax and compatibility fixes.</li>
            <li>Case-insensitive routing while preserving original URL casing for controller/action access.</li>
            <li>Extensible plugin model — load helpers, libraries, and models via config or controller code.</li>
            <li>Improved error handling with customizable view templates for HTTP status codes.</li>
          </ul>

          <h2>Recent Highlights</h2>

          <p><strong>v1.0.3</strong> — Overhauled error handler, new URI and Script Helper plugins, BlogMenu plugin to create blogs without a database, and other refinements.</p>

          <p><strong>v1.0.2</strong> — Core split into <code>NanoMVCCore.php</code> (base class), case-insensitive routing, autoload model improvements, PostgreSQL support, and a redesigned welcome view.</p>

          <h2>Project &amp; Documentation</h2>
          <p>Repo: <a href="https://github.com/Makareene/NanoMVC" target="_blank" rel="noopener">https://github.com/&#8203;Makareene/NanoMVC</a></p>
          <p>Documentation and guides are available at: <a href="https://nanomvc.nipaa.fyi" target="_blank" rel="noopener">https://nanomvc.nipaa.fyi</a></p>

          <h2>Project Structure (typical)</h2>
          <pre><code>app/
  configs/
  controllers/
  models/
  views/
  plugins/
myfiles/
  configs/
  controllers/
  models/
  views/
  plugins/
sysfiles/
  configs/
  controllers/
  models/
  views/
  plugins/</code></pre>

          <h2>Installation (quick)</h2>

          <ol>
            <li>Download the repository from GitHub.</li>
            <li>Place files in your project root.</li>
            <li>Edit <code>/configs/&#8203;config_application.php</code> with base URL and settings.</li>
            <li>Configure database in <code>/configs/config_database.php</code> if required.</li>
            <li>Point your web server document root to the <code>/public</code> folder.</li>
            <li>Change paths in your <code>index.php</code> file.</li>
          </ol>

          <h2>Core Concepts</h2>
          <p><strong>Controllers</strong> — map URLs to controller/method/params. Controller names are case-insensitive in routing; original casing is available via <code>$this->_get_controller()</code> and <code>$this->_get_action()</code>.</p>

          <p><strong>Views</strong> — simple rendering layer. Use view helpers to assign variables and display templates.</p>

          <p><strong>Models</strong> — PDO-backed data layer. Works with MySQL and PostgreSQL (includes port/schema options).</p>

          <p><strong>Plugins</strong> — small libraries you can load from config or controllers. Examples: URI helper, Script helper, BlogMenu.</p>

          <h2>BlogMenu — blog without a DB or any storage system</h2>

          <p>
          The <strong>BlogMenu</strong> plugin builds categories and articles straight from controller files and method PHPDoc metadata — no database required. Metadata format:
          </p>

          <p>Controller category (first line example):</p>
          <pre><code>&lt;?php // -&gt; as categorie: { "name": "Coding", "created": "2025-08-08 12:00", "symbol": "⚙️" } ?&gt;</code></pre>

          <p>Method article metadata (PHPDoc example):</p>
          <pre><code>/**
 * @blog {
 *   "name": "Installation",
 *   "description": "Learn how to install NanoMVC — from quick setup to shared installations. Follow clear steps for configuring your application and database.",
 *   "created": "2025-07-15 09:00"
 * }
 */
public function installation() { ... }</code></pre>

          <p class="note">The plugin parses JSON-like metadata and exposes categories and articles through a simple API — great for documentation-style blogs or small sites that keep content with code.</p>

          <h2>Core Example (simplified)</h2>

          <p>To understand runtime flow, here is a short, conceptual view of the core bootstrap (excerpt):</p>

          <pre><code>class nmvc_core {
  public function main(): void {
    $this->path_info = $_SERVER['PATH_INFO'] ?? '/';
    include 'config_application.php';
    $this->setupErrorHandling();
    $this->setupRouting();
    $this->setupSegments();
    $this->setupController();
    $this->setupAction();
    $this->setupAutoloaders();
    $this->controller->{$this->action}();
  }
}</code></pre>

          <h2>Requirements &amp; License</h2>

          <ul>
            <li>PHP 8.3 or later</li>
            <li>PDO extension enabled</li>
            <li>License: LGPL v2.1 or later</li>
          </ul>

          <h2>Status</h2>
          <p>NanoMVC is actively maintained as a minimalist, modern fork of TinyMVC — preserving the original goals of simplicity while adding safe, opt-in improvements.</p>

          <p class="m1rem-top">Author: Nipaa (fork maintainer). Original TinyMVC by Monte Ohrt.</p>

        </article>
      </section>
