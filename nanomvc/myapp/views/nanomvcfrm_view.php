<section class="article">
  <article>

    <h1>🐘 NanoMVC Framework</h1>

    <p class="meta">
      A minimalist and lightweight PHP MVC framework inspired by TinyMVC — designed for developers who prefer simplicity, control, and extensibility over large and complex frameworks.
    </p>

    <h2>Overview</h2>

    <p>
      <strong>NanoMVC</strong> is a modernized fork of the original TinyMVC framework.
      It preserves the lightweight architecture and straightforward design that made TinyMVC attractive while introducing improvements for modern PHP development.
    </p>

    <p>
      NanoMVC focuses on providing a clean MVC foundation without forcing developers into a specific workflow.
      It gives you the tools you need to build applications while staying out of your way.
    </p>

    <h2>What NanoMVC Gives You</h2>

    <ul>
      <li>Clear MVC separation (Model — View — Controller)</li>
      <li>PDO-based database layer with support for multiple database pools</li>
      <li>Simple library system for reusable functionality</li>
      <li>Automatic view discovery and flexible loading mechanisms</li>
      <li>Safe customization points without modifying the core framework</li>
      <li>Built-in utilities for routing, debugging, error handling, and HTML escaping</li>
    </ul>

    <h2>What NanoMVC Is Not</h2>

    <p>
      NanoMVC is <em>not</em> a full-stack framework such as Laravel or Symfony.
      It intentionally avoids large built-in subsystems such as ORMs, queues, dependency injection containers, and middleware pipelines.
    </p>

    <p>
      Instead, NanoMVC provides a lightweight foundation that allows you to build applications exactly the way you want.
    </p>

    <h2>Key Features</h2>

    <ul>
      <li>Minimalistic architecture with very few dependencies.</li>
      <li>Modern PHP support.</li>
      <li>Simple controller-based routing.</li>
      <li>Extensible library system.</li>
      <li>Customizable error handling.</li>
      <li>Multiple database connection pools.</li>
      <li>Framework customization without modifying the core implementation.</li>
    </ul>

    <h2>Project &amp; Documentation</h2>

    <p>
      GitHub Repository:
      <a href="https://github.com/Makareene/NanoMVC" target="_blank" rel="noopener">
        https://github.com/&#8203;Makareene/&#8203;NanoMVC
      </a>
    </p>

    <p>
      Documentation:
      <a href="https://nanomvc.nipaa.fyi" target="_blank" rel="noopener">
        https://nanomvc.nipaa.fyi
      </a>
    </p>

    <h2>Project Structure</h2>

    <p>
      A typical NanoMVC installation contains three main directories:
    </p>

<pre><code>htdocs/
  index.php

myapp/
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
  views/
  plugins/
  NanoMVC.php
  NanoMVCCore.php</code></pre>

    <p>
      <strong>myapp</strong> contains your application code.
      <strong>myfiles</strong> can be used for shared or customized components.
      <strong>sysfiles</strong> contains the framework itself.
    </p>

    <h2>Core Concepts</h2>

    <p>
      <strong>Controllers</strong> handle requests and coordinate application logic.
    </p>

    <p>
      <strong>Views</strong> render output and presentation.
    </p>

    <p>
      <strong>Models</strong> encapsulate data access and database operations.
    </p>

    <p>
      <strong>Libraries</strong> provide reusable functionality that can be loaded into controllers and models.
    </p>

    <h2>BlogMenu — Content Without a Database</h2>

    <p>
      One of the more unusual NanoMVC libraries is <strong>BlogMenu</strong>.
      It allows categories and articles to be generated directly from controller metadata and method PHPDoc comments.
    </p>

    <p>
      This makes it possible to build documentation websites, developer blogs, and small content-driven projects without any database or external storage system.
    </p>

    <p>
      Example category metadata:
    </p>

<pre><code>&lt;?php // -&gt; as category: { "name": "Programming", "created": "2025-08-08 12:00" } ?&gt;</code></pre>

    <p>
      Example article metadata:
    </p>

<pre><code>/**
 * @blog {
 *   "name": "Installation",
 *   "description": "Getting started with NanoMVC",
 *   "created": "2025-07-15 09:00"
 * }
 */</code></pre>

    <p>
      BlogMenu reads the metadata and automatically generates categories, article lists, navigation links, and pagination.
    </p>

    <h2>Framework Philosophy</h2>

    <p>
      NanoMVC follows a simple principle:
    </p>

    <blockquote>
      Provide a lightweight foundation and let developers decide how much structure they need.
    </blockquote>

    <p>
      Instead of hiding application logic behind large abstractions, NanoMVC keeps most functionality visible and easy to understand.
    </p>

    <p>
      This makes the framework especially suitable for small and medium-sized projects, internal tools, personal websites, documentation systems, and developers who prefer explicit code over framework magic.
    </p>

    <h2>Requirements &amp; License</h2>

    <ul>
      <li>PHP 8.3 or later</li>
      <li>PDO extension enabled</li>
      <li>LGPL v2.1 or later</li>
    </ul>

    <h2>Status</h2>

    <p>
      NanoMVC is actively maintained as a modern continuation of TinyMVC.
      The goal is to preserve the original simplicity of the framework while improving compatibility, usability, and extensibility for modern PHP applications.
    </p>

    <p class="m1rem-top">
      Author: Nipaa (fork maintainer). Original TinyMVC by Monte Ohrt.
    </p>

  </article>
</section>
