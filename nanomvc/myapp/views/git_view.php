<section class="article">
  <article>
    <h1>📝 Git Cheat Sheets</h1>
    <p class="meta">Essential Git commands grouped by common workflows with explanations and examples for quick reference.</p>

    <h2>1. Initialize &amp; Clone</h2>

    <p><strong>git init</strong> — create a new Git repository locally.</p>
    <pre><code>git init</code></pre>
    <p>Starts tracking your project by creating a <code>.git</code> folder.</p>

    <p><strong>git clone &lt;repo-url&gt; [folder-name]</strong> — clone a remote repo into a local folder.</p>
    <pre><code>git clone https://github.com/&#8203;user/NanoMVC.git
git clone https://github.com/&#8203;user/NanoMVC.git NaniMVC-dev</code></pre>
    <p>Specify an optional folder name to clone into a custom directory instead of the default repo name.</p>

    <h2>2. Check Status &amp; History</h2>

    <p><strong>git status</strong> — shows changes in working directory and staging area.</p>
    <pre><code>git status</code></pre>

    <p><strong>git log -1 --pretty=%B</strong> — shows the commit message body of the latest commit.</p>
    <pre><code>git log -1 --pretty=%B</code></pre>

    <h2>3. Stage &amp; Commit Changes</h2>

    <p><strong>git add .</strong> — stage all changed files in the current directory.</p>
    <pre><code>git add .</code></pre>

    <p><strong>git commit -m "message"</strong> — commit staged changes with a message.</p>
    <pre><code>git commit -m "Fix login bug"</code></pre>

    <h2>4. Undo Last Commit (Soft Reset)</h2>

    <p><strong>git reset --soft HEAD~1</strong> — undo last commit but keep changes staged.</p>
    <pre><code>git reset --soft HEAD~1</code></pre>
    <p>Useful if you want to edit your last commit or re-commit differently.</p>

    <h2>5. Branching &amp; Merging</h2>

    <p><strong>git checkout &lt;branch&gt;</strong> — switch to another branch.</p>
    <pre><code>git checkout develop</code></pre>

    <p><strong>git merge &lt;branch&gt;</strong> — merge specified branch into current branch.</p>
    <pre><code>git merge feature-branch</code></pre>

    <h2>6. Sync With Remote</h2>

    <p><strong>git push origin &lt;branch&gt;</strong> — push commits to remote branch.</p>
    <pre><code>git push origin main</code></pre>

    <p><strong>git push -u origin &lt;branch&gt;</strong> — push and set upstream tracking branch.</p>
    <pre><code>git push -u origin feature-branch</code></pre>
    <p>After this, you can use <code>git push</code> without arguments.</p>

    <p><strong>git pull origin &lt;branch&gt;</strong> — fetch and merge remote changes.</p>
    <pre><code>git pull origin main</code></pre>

    <h2>7. Diff Tools &amp; Configuration</h2>

    <p><strong>git difftool &lt;file&gt;</strong> — compare changes in a file using an external diff tool.</p>
    <pre><code>git difftool README.md</code></pre>

    <p><strong>git config --global diff.tool &lt;toolname&gt;</strong> — set default diff tool globally.</p>
    <pre><code>git config --global diff.tool meld</code></pre>

    <p><strong>git config --global difftool.prompt false</strong> — disable confirmation prompts for difftool.</p>
    <pre><code>git config --global difftool.prompt false</code></pre>

    <h2>8. Repository Info</h2>

    <p><strong>git rev-parse --git-dir</strong> — shows the path to the Git metadata directory.</p>
    <pre><code>git rev-parse --git-dir</code></pre>
  </article>
</section>
