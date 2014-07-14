<?php require_once 'includes/top.php'; ?>

<?php

$women[] = array(
  'name' => 'Ada Lovelace',
  'link' => 'http://en.wikipedia.org/wiki/Ada_Lovelace',
  'years' => '(1815&ndash;1852)',
  'image' => 'images/ada_lovelace.jpg',
  'biography' => 'An analyst of Charles Babbage\'s analytical engine and is often described as the "first computer programmer.'
);

$women[] = array(
  'name' => 'Grace Hopper',
  'link' => 'http://en.wikipedia.org/wiki/Grace_Hopper',
  'years' => '(1906&ndash;1992)',
  'image' => 'images/grace_hopper.jpg',
  'biography' => 'A United States Navy officer and the first programmer of the Harvard Mark I, known as the "Mother of COBOL". She developed the first ever compiler for an electronic computer, known as A-0.'
);

$women[] = array(
  'name' => 'Frances Allen',
  'link' => 'http://en.wikipedia.org/wiki/Frances_E._Allen',
  'years' => '(1932&ndash;)',
  'image' => 'images/frances_allen.jpg',
  'biography' => 'The first female IBM Fellow in 1989. In 2006 she became the first female recipient of the ACM\'s Turing Award.'
);

$women[] = array(
  'name' => 'Barbara Liskov',
  'link' => 'http://en.wikipedia.org/wiki/Barbara_Liskov',
  'years' => '(1939&ndash;)',
  'image' => 'images/barbara_liskov.png',
  'biography' => 'Developed the Liskov substitution principle. Liskov was also the winner of the Turing Prize in 2008.'
);

$women[] = array(
  'name' => 'Anita Borg',
  'link' => 'http://en.wikipedia.org/wiki/Anita_Borg',
  'years' => '(1949&ndash;2003)',
  'image' => 'images/anita_borg.jpg',
  'biography' => 'The founding director of the Institute for Women and Technology (IWT)'
);

$women[] = array(
  'name' => 'Maria Klawe',
  'link' => 'http://en.wikipedia.org/wiki/Maria_Klawe',
  'years' => '(1951&ndash;)',
  'image' => 'images/maria_klawe.jpg',
  'biography' => 'The first woman to become President of Harvey Mudd College since its founding in 1955 and was ACM president from 2002 until 2004.'
);
?>
<?php include_once 'includes/header.php'; ?>

    <div id="main">
      <section id="famous">
        <a name="famous"></a>
        <h2>Famous Women</h2>
        <a class="jump up" href="#">&igrave;</a>
        <a class="jump down" href="#organizations">&iacute;</a>
        <div class = "wrapper">
            <?php
                echo viewWoman('Ada Lovelace',
                'http://en.wikipedia.org/wiki/Ada_Lovelace',
                '(1815&ndash;1852)',
                'images/ada_lovelace.jpg',
                'An analyst of Charles Babbage\'s analytical engine and is often
                          described as the "first computer programmer."');
            ?>
          <article class = "woman">
            <h3>
              <a href="http://en.wikipedia.org/wiki/Grace_Hopper">Grace Hopper</a>
            </h3>
            <h4>(1906&ndash;1992)</h4>
            <img src="images/grace_hopper.jpg" alt ="Grace Hopper" />
            <p>A United States Navy officer and the first programmer of the
              Harvard Mark I, known as the "Mother of COBOL". She developed the
              first ever compiler for an electronic computer, known as A-0.</p>
          </article>
          <article class = "woman">
            <h3>
              <a href="http://en.wikipedia.org/wiki/Frances_E._Allen">Frances Allen</a>
            </h3>
            <h4>(1932&ndash;)</h4>
            <img src="images/frances_allen.jpg" alt="Frances Allen" />
            <p>The first female IBM Fellow in 1989. In 2006 she became the first
              female recipient of the ACM's Turing Award.</p>
          </article>
          <article class="break woman">
            <h3>
              <a href="http://en.wikipedia.org/wiki/Barbara_Liskov">Barbara Liskov</a>
            </h3>
            <h4>(1939&ndash;)</h4>
            <img src="images/barbara_liskov.png" alt="Barbara Liskov" />
            <p>Developed the Liskov substitution principle. Liskov was also the
              winner of the Turing Prize in 2008.</p>
          </article>
          <article class = "woman">
            <h3>
              <a href="http://en.wikipedia.org/wiki/Anita_Borg">Anita Borg</a>
            </h3>
            <h4>(1949&ndash;2003)</h4>
            <img src="images/anita_borg.jpg" alt="Anita Borg" />
            <p>The founding director of the Institute for Women and Technology
              (IWT)</p>
          </article>
          <article class = "woman">
            <h3>
              <a href="http://en.wikipedia.org/wiki/Maria_Klawe">Maria Klawe</a>
            </h3>
            <h4>(1951&ndash;)</h4>
            <img src="images/maria_klawe.jpg" alt="Maria Klawe" />
            <p>The first woman to become President of Harvey Mudd College since
              its founding in 1955 and was ACM president from 2002 until 2004.</p>
          </article>
        </div>
      </section>

      <section id="organizations">
        <a name="organizations"></a>
        <h2>Organizations</h2>
        <a class="jump up" href="#famous">&igrave;</a>
        <a class="jump down" href="#facts">&iacute;</a>
        <div class = "wrapper">
          <p>These are some awesome organizations that help women in computing.
            This is a brief list and there are many more out there.</p>

          <ul>
            <li>
              <a href="http://www.ncwit.org/">National Center for Women & Information Technology</a>
              <img src="images/logos/ncwit.png" alt="National Center for Women & Information Technology logo" />
            </li>
            <li>
              <a href="http://anitaborg.org/">Anita Borg Institute for Women and Technology</a>
              <img src="images/logos/anitaborg.gif" alt="Anita Borg Institute for Women and Technology logo" />
            </li>
            <li>
              <a href="http://adainitiative.org/">The Ada Initiative</a>
              <img src="images/logos/adainitiative.png" alt="The Ada Initiative logo" />
            </li>
            <li>
              <a href="http://girldevelopit.com/">Girl Develop It</a>
              <img src="images/logos/gdi.png" alt="Girl Develop It logo" />
            </li>
            <li>
              <a href="http://www.blackgirlscode.com/">Black Girls Code</a>
              <img src="images/logos/blackgirlscode.jpg" alt="Black Girls Code logo" />
            </li>
            <li>
              <a href="http://railsgirls.com/">Rails Girls</a>
              <img src="images/logos/railsgirls.png" alt="Rails Girls logo" />
            </li>
          </ul>
        </div>
      </section>

      <section id="facts">
        <a name="facts"></a>
        <h2>Fun Facts</h2>
        <a class="jump up" href="#organizations">&igrave;</a>
        <a class="jump down" href="#bottom">&iacute;</a>
        <div class = "wrapper">
          <ul>
            <li>Every year the Anita Borg Institute holds the
              <a href="http://anitaborg.org/initiatives/ghc/">Grace Hopper
              Celebration of Women in Computing</a> conference to bring the
              research and career interests of women in computing to the
              forefront</li>
            <li>25% of the computing workforce were women in 2011
              <a href="http://www.bls.gov/cps/cpsaat11.htm">reference</a></li>
            <li>The <a href="https://twitter.com/DevChix">DevChix</a> google group has over 1000 members.</li>
            <li>Girl Develop It has <a href="http://girldevelopit.com/chapters">chapters</a> in eleven cities.</li>
            <li>Women eared 18% of the Computer and Information Sciences
              undergraduate degrees in 2010. <a href="http://www.ncwit.org/sites/default/files/resources/2012bythenumbers_web.pdf">
              reference</a></li>
            <li>The U.S. Bureau of Labor Statistics projects that by 2018, there
              will be a total of nearly 1.4 million computing-related jobs added
              in the U.S., an increase of 22% from 2008.
              <a href="http://www.ncwit.org/sites/default/files/resources/scorecard2010_printversion_web.pdf">reference</a></li>
            <li>The median age of women in computing and mathematical occupations
              is 42. <a href="http://www.ncwit.org/blog/did-you-know-demographics-technical-women">reference</a></li>
            <li>Of the 20 occupations with the highest median earnings for women,
              5 are computing occupations: computer software engineers, computer
              and information systems managers, computer programmers, computer
              scientists and systems analysts, and network systems and data
              communications analysts. <a href="http://www.ncwit.org/blog/did-you-know-demographics-technical-women">reference</a></li>
          </ul>
        </div>
      </section>
    </div>

    <footer>
      <nav>
        <ul>
          <li>
            <a href="#famous">Famous Women</a>
          </li>
          <li>
            <a href="#organizations">Organizations</a>
          </li>
          <li>
            <a href="#facts">Fun Facts</a>
          </li>
        </ul>
      </nav>
    </footer>
<?php require_once 'includes/bottom.php'; ?>
