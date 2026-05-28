<article class="article">
  <h1>🎮 How to Properly Prepare Graphics for Web Games and Applications</h1>
  <p class="meta">An engineering approach to preparing graphics for fast, scalable web games and modern web applications.</p>

  <h2>Overview</h2>
  <p>
    When a beginner developer creates a web game or an interface, they usually think only about making the image look beautiful.
    This is an understandable mistake. The user sees graphics, so it feels like appearance is the most important thing.
  </p>

  <p>But the real performance of a web application depends on much more than beauty.</p>

  <p>Poorly prepared graphics can cause:</p>

  <ul>
    <li>slow page loading</li>
    <li>high mobile traffic usage</li>
    <li>lags on weak devices</li>
    <li>unnecessary RAM usage</li>
    <li>increased CPU load</li>
    <li>increased GPU load</li>
    <li>extra HTTP requests</li>
    <li>high server load</li>
    <li>slowdowns even with a good internet connection</li>
    <li>poor project scalability</li>
  </ul>

  <p>
    Good graphics architecture is not just “compressing images”.
    It is an engineering approach.
  </p>

  <p>Let's go through the main principles.</p>

  <h2>1. Vector and Raster Graphics Are Different Tools</h2>

  <p>
    The first thing to understand is simple:
    not all graphics are the same.
  </p>

  <p>Raster graphics are made of pixels.</p>

  <p>Examples of raster formats:</p>

  <ul>
    <li>PNG</li>
    <li>JPEG</li>
    <li>WebP</li>
    <li>AVIF</li>
  </ul>

  <p>If you enlarge a raster image too much, it loses quality.</p>

  <p>Example:</p>

  <p>You have an icon with a size of 32×32 pixels.</p>

  <p>If you stretch it to 300×300, the result will be blurry and ugly.</p>

  <p>Raster graphics work well for:</p>

  <ul>
    <li>game sprites</li>
    <li>characters</li>
    <li>game objects</li>
    <li>backgrounds</li>
    <li>textures</li>
    <li>artistic illustrations</li>
    <li>complex detailed graphics</li>
  </ul>

  <p>Now let's look at vector graphics.</p>

  <p>
    A vector image is not a set of pixels.
    It is a mathematical description of lines, curves, and shapes.
  </p>

  <p>A typical example:</p>

  <pre><code>SVG</code></pre>

  <p>The advantage:</p>

  <p>A vector image can be scaled almost infinitely without losing quality.</p>

  <p>Vector graphics are excellent for:</p>

  <ul>
    <li>logos</li>
    <li>simple UI icons</li>
    <li>buttons</li>
    <li>diagrams</li>
    <li>interface elements</li>
    <li>simple decorative elements</li>
  </ul>

  <p>A very common mistake:</p>

  <pre><code>“SVG is always better because it scales.”</code></pre>

  <p>This is wrong.</p>

  <p>SVG is not magic.</p>

  <p>
    If an SVG contains a complex scene with many paths, curves, and effects,
    the browser has to calculate and render all that geometry.
  </p>

  <p>This can be much more expensive than simply displaying a ready image.</p>

  <p>So the rule is simple:</p>

  <ul>
    <li>simple interface graphics → vector</li>
    <li>complex artistic game graphics → raster</li>
  </ul>

  <p>
    The correct question is not “what is more modern?”,
    but “what is cheaper to render?”.
  </p>

  <h2>2. If the Browser Can Build It Itself — Do Not Send an Image</h2>

  <p>This is one of the most underestimated principles.</p>

  <p>Before creating a graphic file, ask yourself:</p>

  <pre><code>Do I really need an image here?</code></pre>

  <p>A modern browser can do a lot by itself.</p>

  <p>It can efficiently build:</p>

  <ul>
    <li>buttons</li>
    <li>borders</li>
    <li>rounded corners</li>
    <li>shadows</li>
    <li>gradients</li>
    <li>lines</li>
    <li>geometric shapes</li>
    <li>loading indicators</li>
    <li>text</li>
    <li>many simple icons</li>
  </ul>

  <p>Bad solutions:</p>

  <ul>
    <li>button.webp</li>
    <li>shadow.png</li>
    <li>gradient.webp</li>
    <li>spinner.gif</li>
    <li>text_as_image.png</li>
  </ul>

  <p>Why is this bad?</p>

  <p>Because an image requires:</p>

  <ul>
    <li>a separate HTTP request</li>
    <li>network transfer</li>
    <li>decoding</li>
    <li>memory storage</li>
    <li>cache management</li>
  </ul>

  <p>Browser built-in capabilities already exist for free.</p>

  <p>Example.</p>

  <p>Bad:</p>

  <p>using PNG for a button with a background and rounded corners.</p>

  <p>Correct:</p>

  <p>using CSS:</p>

  <ul>
    <li>border-radius</li>
    <li>background</li>
    <li>linear-gradient</li>
    <li>box-shadow</li>
  </ul>

  <p>Example with text.</p>

  <p>A very bad practice:</p>

  <p>making text as an image.</p>

  <p>Why?</p>

  <ul>
    <li>it cannot be selected</li>
    <li>it cannot be searched</li>
    <li>it is bad for accessibility</li>
    <li>it is bad for SEO</li>
    <li>it is hard to localize</li>
    <li>it scales poorly</li>
  </ul>

  <p>But there is an important nuance.</p>

  <p>Do not turn this rule into a religion.</p>

  <p>Sometimes browser rendering can be more expensive.</p>

  <p>For example, when a decorative block is built using:</p>

  <ul>
    <li>many CSS layers</li>
    <li>blur</li>
    <li>filter</li>
    <li>masks</li>
    <li>complex SVG</li>
  </ul>

  <p>In that case, a ready optimized bitmap can be faster.</p>

  <p>The main principle:</p>

  <p>do not send over the network what the browser can efficiently build itself.</p>

  <h2>3. Choose the Right Format</h2>

  <p>There is no universal best format.</p>

  <p>Each format solves its own task.</p>

  <h3>PNG</h3>

  <p>Use it when you need:</p>

  <ul>
    <li>lossless graphics</li>
    <li>transparency</li>
    <li>pixel art</li>
    <li>sharp edges</li>
    <li>exact preservation of details</li>
  </ul>

  <p>Disadvantage:</p>

  <p>PNG is often very heavy.</p>

  <h3>WebP</h3>

  <p>In practice, this is one of the best universal choices for most web projects.</p>

  <p>Advantages:</p>

  <ul>
    <li>transparency</li>
    <li>good compression</li>
    <li>much smaller than PNG</li>
    <li>good browser support</li>
    <li>support for lossy and lossless modes</li>
  </ul>

  <p>Good for:</p>

  <ul>
    <li>sprites</li>
    <li>UI</li>
    <li>icons</li>
    <li>game objects</li>
    <li>most decorative elements</li>
  </ul>

  <h3>AVIF</h3>

  <p>AVIF provides even stronger compression.</p>

  <p>But there are disadvantages:</p>

  <ul>
    <li>heavier decoding</li>
    <li>higher load on weak devices</li>
    <li>the benefit is not always worth it</li>
  </ul>

  <p>Sometimes a small file loads quickly but decodes slowly.</p>

  <h3>JPEG</h3>

  <p>Use JPEG only for:</p>

  <ul>
    <li>photographs</li>
    <li>large background images</li>
    <li>photo content</li>
  </ul>

  <p>Do not use JPEG for:</p>

  <ul>
    <li>UI</li>
    <li>transparent objects</li>
    <li>sprites</li>
    <li>icons</li>
  </ul>

  <h2>4. Do Not Store Images Larger Than Needed</h2>

  <p>This is one of the most common mistakes.</p>

  <p>You have a button that is displayed as 64×64.</p>

  <p>But the designer exported it as 2048×2048.</p>

  <p>What happens?</p>

  <p>The browser:</p>

  <ul>
    <li>downloads a huge file</li>
    <li>decodes it</li>
    <li>stores it in memory</li>
    <li>then scales it down to a small size</li>
  </ul>

  <p>This is an absolutely meaningless waste of resources.</p>

  <p>The correct approach:</p>

  <p>the file size should be close to the real display size.</p>

  <p>Bad:</p>

  <pre><code>1024×1024 → displayed as 48×48</code></pre>

  <p>Good:</p>

  <pre><code>64×64 → displayed as 64×64</code></pre>

  <h2>5. Consider HiDPI / Retina</h2>

  <p>Modern displays have high pixel density.</p>

  <p>So an image that looks normal on an old monitor can look blurry on a modern device.</p>

  <p>A typical approach:</p>

  <ul>
    <li>1x version</li>
    <li>2x version</li>
  </ul>

  <p>Example:</p>

  <pre><code>icon.webp
icon@2x.webp</code></pre>

  <p>But this does not mean that you should blindly double everything.</p>

  <p>Look at real usage.</p>

  <h2>6. Crop Empty Space</h2>

  <p>Transparent space is still data.</p>

  <p>Mistake:</p>

  <p>
    a character occupies 100×100,
    but is exported as 1000×1000 with transparent borders.
  </p>

  <p>Problems:</p>

  <ul>
    <li>larger file</li>
    <li>more memory usage</li>
    <li>the GPU processes more data</li>
    <li>alpha blending becomes heavier</li>
  </ul>

  <p>A transparent pixel is not free.</p>

  <h2>7. Combine Small Assets</h2>

  <p>A very common mistake:</p>

  <p>storing dozens of small files.</p>

  <p>For example:</p>

  <ul>
    <li>king.webp</li>
    <li>queen.webp</li>
    <li>rook.webp</li>
    <li>bishop.webp</li>
    <li>pawn.webp</li>
  </ul>

  <p>Why is this bad?</p>

  <p>Because every file is a separate request.</p>

  <p>Even if the file is small.</p>

  <p>Every request includes:</p>

  <ul>
    <li>DNS</li>
    <li>TCP/TLS</li>
    <li>HTTP headers</li>
    <li>server-side processing</li>
    <li>cache checks</li>
    <li>browser bookkeeping</li>
    <li>decode startup</li>
  </ul>

  <p>100 files of 5 KB can be worse than one 500 KB file.</p>

  <p>Useful solutions:</p>

  <ul>
    <li>sprite sheets</li>
    <li>atlases</li>
    <li>combined assets</li>
  </ul>

  <h2>8. Polling Kills Server Performance</h2>

  <p>This is a very important architectural point.</p>

  <p>Suppose the client makes:</p>

  <pre><code>GET /check_status</code></pre>

  <p>every 2 seconds.</p>

  <p>If you have 1000 players:</p>

  <pre><code>500 requests per second</code></pre>

  <p>If each client separately asks for:</p>

  <ul>
    <li>timer</li>
    <li>chat</li>
    <li>notifications</li>
    <li>inventory</li>
    <li>game state</li>
  </ul>

  <p>you already get thousands of requests.</p>

  <p>Even if the responses are small, every request starts:</p>

  <ul>
    <li>routing</li>
    <li>authentication</li>
    <li>session handling</li>
    <li>database access</li>
    <li>SQL execution</li>
    <li>JSON serialization</li>
  </ul>

  <p>This is expensive.</p>

  <p>Bad:</p>

  <ul>
    <li>/get_timer</li>
    <li>/get_chat</li>
    <li>/get_state</li>
    <li>/get_notifications</li>
  </ul>

  <p>Better:</p>

  <pre><code>/game_sync</code></pre>

  <p>Even better:</p>

  <ul>
    <li>WebSocket</li>
    <li>SSE</li>
  </ul>

  <p>API architecture affects performance no less than graphics.</p>

  <h2>9. Runtime Memory Is More Important Than File Size</h2>

  <p>This is a very important point that beginners often do not understand.</p>

  <p>File:</p>

  <pre><code>100 KB WebP</code></pre>

  <p>After decoding:</p>

  <p>it can occupy megabytes of memory.</p>

  <p>Why?</p>

  <p>The GPU does not work with a compressed file.</p>

  <p>The GPU works with raw texture data.</p>

  <p>Downloaded file size and real memory consumption are different things.</p>

  <h2>10. Lossy and Lossless</h2>

  <p>Lossless:</p>

  <ul>
    <li>perfect quality</li>
    <li>large size</li>
  </ul>

  <p>Lossy:</p>

  <ul>
    <li>small quality loss</li>
    <li>huge size savings</li>
  </ul>

  <p>For many game assets, the visual difference is almost invisible.</p>

  <p>You should not fanatically use lossless everywhere.</p>

  <h2>11. Do Not Force the Browser to Constantly Scale Images</h2>

  <p>If an image is constantly being scaled:</p>

  <ul>
    <li>the CPU works more</li>
    <li>the GPU works more</li>
    <li>rendering becomes heavier</li>
  </ul>

  <p>This is especially critical for:</p>

  <ul>
    <li>canvas</li>
    <li>animations</li>
    <li>realtime rendering</li>
  </ul>

  <h2>12. Preload Important Assets</h2>

  <p>Bad scenario:</p>

  <p>the player triggers an explosion effect for the first time.</p>

  <p>And only at that moment the file starts loading.</p>

  <p>Result:</p>

  <pre><code>freeze</code></pre>

  <p>Correct:</p>

  <p>preload before the match starts.</p>

  <h2>13. Use Caching</h2>

  <p>Without caching, the browser will repeatedly load the same resources.</p>

  <p>Use:</p>

  <ul>
    <li>Cache-Control</li>
    <li>versioned filenames</li>
    <li>immutable caching</li>
  </ul>

  <p>Example:</p>

  <pre><code>piece.8f3c1.webp</code></pre>

  <h2>14. Power-of-Two Textures</h2>

  <p>Classic sizes:</p>

  <ul>
    <li>64×64</li>
    <li>128×128</li>
    <li>256×256</li>
    <li>512×512</li>
  </ul>

  <p>Today this is not always required.</p>

  <p>But sometimes it is useful for:</p>

  <ul>
    <li>mipmaps</li>
    <li>GPU optimization</li>
    <li>compatibility</li>
  </ul>

  <h2>15. Separate Source Files and Production Assets</h2>

  <p>Do not send users:</p>

  <ul>
    <li>PSD</li>
    <li>Krita project files</li>
    <li>huge PNG files</li>
    <li>designer source files</li>
  </ul>

  <p>Pipeline:</p>

  <pre><code>source → export → optimize → deploy</code></pre>

  <h2>16. Animation Also Costs Resources</h2>

  <p>Frame-by-frame animation:</p>

  <p>more expensive.</p>

  <p>Transform animation:</p>

  <p>usually cheaper.</p>

  <p>For example:</p>

  <ul>
    <li>translate()</li>
    <li>scale()</li>
    <li>rotate()</li>
  </ul>

  <p>These are often better than constantly changing a bitmap.</p>

  <h2>17. Measure, Do Not Guess</h2>

  <p>Not:</p>

  <pre><code>“I think it is faster.”</code></pre>

  <p>Check it.</p>

  <p>Tools:</p>

  <ul>
    <li>Chrome DevTools</li>
    <li>Network</li>
    <li>Performance</li>
    <li>Lighthouse</li>
    <li>Memory profiler</li>
  </ul>

  <h2>18. Final Thoughts: Graphics Optimization Is Architecture, Not Just Images</h2>

  <p>The main beginner mistake:</p>

  <p>thinking that graphics optimization simply means reducing image size.</p>

  <p>In reality, the correct process starts much earlier.</p>

  <p>You need to ask the right questions:</p>

  <ul>
    <li>Do I need an image at all?</li>
    <li>Can the browser build this element itself?</li>
    <li>Do I need vector or raster?</li>
    <li>Which format should I choose?</li>
    <li>How many HTTP requests will this create?</li>
    <li>How will this affect polling?</li>
    <li>What load will this create on the server?</li>
    <li>How much memory will it occupy after decoding?</li>
    <li>How will it affect the CPU?</li>
    <li>How will it affect the GPU?</li>
    <li>How will it behave on mobile devices?</li>
  </ul>

  <p>A fast web game is not a set of beautiful pictures.</p>

  <p class="note">It is competent system engineering.</p>
</article>
