<?php
/**
 * Template Name: 採用ページ
 */
get_header(); ?>

  <main>

    <!-- Hero -->
    <section class="section section-subhero section-subhero-simple">
      <div class="section-inner">
        <h1 class="subhero-title-en">Recruit</h1>
      </div>
    </section>

    <!-- JOIN US -->
    <section class="section section-recruit-intro">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">JOIN US</h2>
          <p class="section-title-ja">概要</p>
        </div>
        <div class="recruit-intro-content">
          <h3 class="recruit-catch">共に成長してくれる学生を<br>募集しています</h3>
          <p class="recruit-desc">私たちはデザイン制作やイベントの企画・運営を行っています。<br>デザインや映像に関心のある方、<br>そして私たちと一緒に新規事業を立ち上げ、<br>事業の成長を支えてくれるインターン生を募集しています。<br>有償でのインターン経験は、きっと新卒採用でも強みになります。<br>学生時代に挑戦したい方をお待ちしています！</p>
        </div>
      </div>
    </section>

    <!-- WANTED -->
    <section class="section section-wanted">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">WANTED</h2>
          <p class="section-title-ja">募集職種</p>
        </div>
        <div class="wanted-cards">
          <div class="wanted-card">
            <h3 class="wanted-card-title">Creative</h3>
            <p class="wanted-card-desc">デザイン/映像編集</p>
          </div>
          <div class="wanted-card">
            <h3 class="wanted-card-title">Business</h3>
            <p class="wanted-card-desc">新規事業/リサーチ/効率化</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FLOW -->
    <section class="section section-flow">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">FLOW</h2>
          <p class="section-title-ja">選考フロー</p>
        </div>
        <div class="flow-steps">
          <div class="flow-step">
            <span class="flow-step-num">01</span>
            <p class="flow-step-text">フォームより申込</p>
          </div>
          <div class="flow-arrow"><span class="material-symbols-outlined">chevron_right</span></div>
          <div class="flow-step">
            <span class="flow-step-num">02</span>
            <p class="flow-step-text">書類選考</p>
          </div>
          <div class="flow-arrow"><span class="material-symbols-outlined">chevron_right</span></div>
          <div class="flow-step">
            <span class="flow-step-num">03</span>
            <p class="flow-step-text">面接</p>
          </div>
          <div class="flow-arrow"><span class="material-symbols-outlined">chevron_right</span></div>
          <div class="flow-step">
            <span class="flow-step-num">04</span>
            <p class="flow-step-text">採用決定</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CONDITIONS -->
    <section class="section section-conditions">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">CONDITIONS</h2>
          <p class="section-title-ja">勤務条件</p>
        </div>
        <dl class="conditions-list">
          <div class="conditions-row">
            <dt>仕事概要</dt>
            <dd>DESIGN：Adobe製品を使用したデザイン業務、映像編集業務<br>BUSINESS：新規事業企画、既存事業のスケールのサポート、リサーチ業務、資料作成業務</dd>
          </div>
          <div class="conditions-row">
            <dt>給与</dt>
            <dd>時給：1,100円〜（経験・能力に応じて相談）<br>営業希望の方は成果に応じたインセンティブの相談可</dd>
          </div>
          <div class="conditions-row">
            <dt>応募資格</dt>
            <dd>15歳以上。週3以上勤務できる方（相談可）<br>福岡県外からのリモート勤務の場合は要相談</dd>
          </div>
          <div class="conditions-row">
            <dt>勤務時間</dt>
            <dd>10:00〜19:00<br>※上記時間内でシフト制</dd>
          </div>
          <div class="conditions-row">
            <dt>休日</dt>
            <dd>土・日・祝日（夏季、冬季の長期休暇あり）<br>イベント事業も行う場合は土日出勤も可</dd>
          </div>
          <div class="conditions-row">
            <dt>勤務地・勤務体系</dt>
            <dd>薬院オフィス<br>福岡県福岡市中央区薬院1-10-14ライラック薬院301<br>最寄：薬院大通り駅<br><br>一部リモート可<br>能力・経験に応じてフルリモート可</dd>
          </div>
        </dl>
      </div>
    </section>

    <!-- ENTRY -->
    <section class="section section-entry" id="entry">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">ENTRY</h2>
          <p class="section-title-ja">エントリー</p>
        </div>
        <?php if (function_exists('wpcf7_contact_form_tag_func')) : ?>
          <?php echo do_shortcode('[contact-form-7 id="entry-form" title="エントリーフォーム"]'); ?>
        <?php else : ?>
        <form class="contact-form" id="entryForm">
          <div class="form-group">
            <label for="entry-name" class="form-label">お名前 <span class="required">*</span></label>
            <input type="text" id="entry-name" name="name" class="form-input" placeholder="お名前" required>
          </div>
          <div class="form-group">
            <label for="entry-email" class="form-label">Email <span class="required">*</span></label>
            <input type="email" id="entry-email" name="email" class="form-input" placeholder="メールアドレス" required>
          </div>
          <div class="form-group">
            <label for="entry-position" class="form-label">応募職種 <span class="required">*</span></label>
            <select id="entry-position" name="position" class="form-input form-select" required>
              <option value="" disabled selected>希望職種を選択してください</option>
              <option value="design">DESIGN</option>
              <option value="business">BUSINESS</option>
              <option value="others">OTHERS</option>
            </select>
          </div>
          <div class="form-group">
            <label for="entry-university" class="form-label">大学名 <span class="required">*</span></label>
            <input type="text" id="entry-university" name="university" class="form-input" placeholder="大学名" required>
          </div>
          <div class="form-group">
            <label for="entry-graduation" class="form-label">卒業予定年度 <span class="required">*</span></label>
            <input type="text" id="entry-graduation" name="graduation" class="form-input" placeholder="卒業予定年度" required>
          </div>
          <div class="form-group">
            <label for="entry-message" class="form-label">ご質問・要望</label>
            <textarea id="entry-message" name="message" class="form-textarea" placeholder="ご質問・要望があればご記入ください"></textarea>
          </div>
          <button type="submit" class="btn-send">送信</button>
        </form>
        <?php endif; ?>
      </div>
    </section>

    <!-- COMPANY -->
    <section class="section section-company" id="company">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">COMPANY</h2>
          <p class="section-title-ja">会社概要</p>
        </div>
        <dl class="company-info">
          <div class="company-row">
            <dt>社　名</dt>
            <dd>株式会社SAKAZUKI</dd>
          </div>
          <div class="company-row">
            <dt>設　立</dt>
            <dd>2019年12月12日</dd>
          </div>
          <div class="company-row">
            <dt>資本金</dt>
            <dd>100万円</dd>
          </div>
          <div class="company-row">
            <dt>所在地</dt>
            <dd>福岡県福岡市中央区薬院1-10-14ライラック薬院301</dd>
          </div>
          <div class="company-row">
            <dt>経営陣</dt>
            <dd>代表取締役　吉田優哉<br>取締役　坂雄貴</dd>
          </div>
          <div class="company-row">
            <dt>事業内容</dt>
            <dd>制作事業（デザイン制作・WEB制作・映像制作）<br>イベント事業（企画・運営）</dd>
          </div>
        </dl>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
