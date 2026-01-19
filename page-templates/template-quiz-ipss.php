<?php
/**
 * Template Name: Quiz IPSS
 */

get_header();
?>

<!-- Quiz Hero -->
<section class="quiz-hero">
    <div class="quiz-hero-content">
        <p class="quiz-hero-label">ТЕСТУВАННЯ</p>
        <h1 class="quiz-hero-title">IPSS-QL</h1>
        <p class="quiz-hero-subtitle">Міжнародна шкала оцінки сечовипускання</p>
    </div>
</section>

<!-- Quiz Introduction -->
<section class="quiz-intro">
    <div class="quiz-intro-inner">
        <div class="quiz-intro-icon">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
        </div>
        <p>Відповівши на запитання цього опитувальника, Ви зможете визначити наявність або відсутність симптомів порушення сечовипускання</p>
        <div class="quiz-intro-note">
            <span>7 запитань</span>
            <span>~3 хвилини</span>
        </div>
    </div>
</section>

<!-- Quiz Form -->
<section class="quiz-section">
    <div class="quiz-container">
        <form id="ipss-quiz-form" class="quiz-form">
            
            <!-- Question 1 -->
            <div class="quiz-question" data-question="1">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">01</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця як часто у Вас було відчуття неповного спорожнення сечового міхура після сечовипускання?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Не було</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідше 1 разу з 5 сечовипускань</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Менше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Приблизно у половині сечовипускань</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Більше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="quiz-question" data-question="2">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">02</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця як часто у Вас виникало бажання помочитися раніше, ніж через 2 години після попереднього сечовипускання?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Не було</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідше 1 разу з 5 сечовипускань</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Менше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Приблизно у половині сечовипускань</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Більше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="quiz-question" data-question="3">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">03</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця як часто сечовипускання було переривчастим?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Не було</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідше 1 разу з 5 сечовипускань</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Менше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Приблизно у половині сечовипускань</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Більше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="quiz-question" data-question="4">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">04</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця як часто Вам було важко тимчасово утриматися від сечовипускання при виникненні позиву?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Не було</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідше 1 разу з 5 сечовипускань</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Менше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Приблизно у половині сечовипускань</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Більше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="quiz-question" data-question="5">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">05</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця як часто Ви відчували слабкий напір струменя сечі?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Не було</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідше 1 разу з 5 сечовипускань</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Менше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Приблизно у половині сечовипускань</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Більше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="quiz-question" data-question="6">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">06</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця як часто Вам доводилося докладати зусилля, щоб помочитися?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Не було</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідше 1 разу з 5 сечовипускань</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Менше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Приблизно у половині сечовипускань</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Більше ніж у половині сечовипускань</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="quiz-question" data-question="7">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">07</span>
                    <h3 class="quiz-question-title">Протягом останнього місяця скільки разів за ніч (від моменту, коли Ви лягаєте спати, до ранкового підйому) Вам зазвичай доводилося вставати, щоб помочитися?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Жодного разу</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">1 раз</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">2 рази</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">3 рази</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">4 рази</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">5 і більше разів</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Progress & Submit -->
            <div class="quiz-footer">
                <div class="quiz-progress">
                    <div class="quiz-progress-bar">
                        <div class="quiz-progress-fill" id="quiz-progress-fill"></div>
                    </div>
                    <span class="quiz-progress-text"><span id="answered-count">0</span> / 7 запитань</span>
                </div>
                <button type="submit" class="quiz-submit" id="quiz-submit">
                    Показати результат
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </form>

        <!-- Results -->
        <div class="quiz-results" id="quiz-results" hidden>
            <div class="quiz-results-header">
                <div class="quiz-results-score">
                    <span class="quiz-results-number" id="results-score">0</span>
                    <span class="quiz-results-max">/ 35</span>
                </div>
                <h2 class="quiz-results-title" id="results-title">Результат</h2>
            </div>
            
            <div class="quiz-results-scale">
                <div class="quiz-scale-bar">
                    <div class="quiz-scale-segment quiz-scale-mild">0-7</div>
                    <div class="quiz-scale-segment quiz-scale-moderate">8-19</div>
                    <div class="quiz-scale-segment quiz-scale-severe">20-35</div>
                </div>
                <div class="quiz-scale-labels">
                    <span>Легкі</span>
                    <span>Помірні</span>
                    <span>Виражені</span>
                </div>
                <div class="quiz-scale-marker" id="quiz-scale-marker"></div>
            </div>
            
            <div class="quiz-results-description" id="results-description">
                <!-- Dynamic content -->
            </div>
            
            <div class="quiz-results-actions">
                <button type="button" class="quiz-retry" id="quiz-retry">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 4v6h6M23 20v-6h-6"/>
                        <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"/>
                    </svg>
                    Пройти ще раз
                </button>
                <a href="#" class="quiz-consult" data-consultation-open>
                    Записатись на консультацію
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Modal -->
<div class="consultation-modal" id="consultation-modal" aria-hidden="true">
    <div class="consultation-modal-backdrop" data-consultation-close></div>
    <div class="consultation-modal-content" role="dialog" aria-modal="true" aria-labelledby="consultation-modal-title">
        <button class="consultation-modal-close" type="button" aria-label="Закрити" data-consultation-close></button>
        <div class="consultation-modal-header">
            <h3 class="consultation-modal-title" id="consultation-modal-title">Записатись на прийом</h3>
        </div>
        <form class="consultation-modal-form" id="consultation-modal-form">
            <input type="hidden" name="service" value="Консультація після квізу IPSS">
            <label class="consultation-modal-field">
                <span>ПІБ</span>
                <input type="text" name="name" required placeholder="Введіть ваше повне ім'я">
            </label>
            <label class="consultation-modal-field">
                <span>Телефон</span>
                <input type="tel" name="phone" required placeholder="+380 XX XXX XX XX">
            </label>
            <button class="consultation-modal-submit btn-primary" type="submit">Зателефонувати мені</button>
        </form>
        <div class="consultation-modal-success" id="consultation-modal-success" hidden>
            <h4>Дякуємо!</h4>
            <p>Ваша заявка прийнята. Ми зв'яжемось з вами найближчим часом.</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ipss-quiz-form');
    const results = document.getElementById('quiz-results');
    const progressFill = document.getElementById('quiz-progress-fill');
    const answeredCount = document.getElementById('answered-count');
    const submitBtn = document.getElementById('quiz-submit');
    const retryBtn = document.getElementById('quiz-retry');
    
    // Track answered questions
    const questions = form.querySelectorAll('.quiz-question');
    const totalQuestions = questions.length;
    
    function updateProgress() {
        let answered = 0;
        for (let i = 1; i <= totalQuestions; i++) {
            if (form.querySelector(`input[name="q${i}"]:checked`)) {
                answered++;
            }
        }
        answeredCount.textContent = answered;
        progressFill.style.width = (answered / totalQuestions * 100) + '%';
        
        // Enable/disable submit
        submitBtn.disabled = answered < totalQuestions;
    }
    
    // Listen for changes
    form.querySelectorAll('input[type="radio"]').forEach(input => {
        input.addEventListener('change', function() {
            updateProgress();
            // Mark question as answered
            this.closest('.quiz-question').classList.add('answered');
        });
    });
    
    // Handle submit
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Calculate score
        let score = 0;
        for (let i = 1; i <= totalQuestions; i++) {
            const checked = form.querySelector(`input[name="q${i}"]:checked`);
            if (checked) {
                score += parseInt(checked.value);
            }
        }
        
        // Show results
        showResults(score);
    });
    
    function showResults(score) {
        form.hidden = true;
        results.hidden = false;
        
        document.getElementById('results-score').textContent = score;
        
        let title, description, markerPosition;
        
        if (score <= 7) {
            title = 'Легкі симптоми';
            description = `
                <p>Ваш результат: <strong>${score} балів</strong> — це відповідає легким симптомам порушення сечовипускання або їх відсутності.</p>
                <p>Рекомендації:</p>
                <ul>
                    <li>Продовжуйте вести здоровий спосіб життя</li>
                    <li>Регулярно проходьте профілактичні огляди (1 раз на рік)</li>
                    <li>Зверніться до уролога при появі нових симптомів</li>
                </ul>
            `;
            markerPosition = (score / 7) * 33;
        } else if (score <= 19) {
            title = 'Помірні симптоми';
            description = `
                <p>Ваш результат: <strong>${score} балів</strong> — це відповідає помірним симптомам порушення сечовипускання.</p>
                <p>Рекомендації:</p>
                <ul>
                    <li>Рекомендується консультація уролога</li>
                    <li>Може знадобитися додаткове обстеження</li>
                    <li>Лікування може включати медикаментозну терапію</li>
                    <li>Важливо не ігнорувати симптоми</li>
                </ul>
            `;
            markerPosition = 33 + ((score - 8) / 12) * 33;
        } else {
            title = 'Виражені симптоми';
            description = `
                <p>Ваш результат: <strong>${score} балів</strong> — це відповідає вираженим симптомам порушення сечовипускання.</p>
                <p>Рекомендації:</p>
                <ul>
                    <li><strong>Обов'язково зверніться до уролога</strong></li>
                    <li>Необхідне комплексне обстеження</li>
                    <li>Може знадобитися активне лікування</li>
                    <li>Не відкладайте візит до лікаря</li>
                </ul>
            `;
            markerPosition = 66 + ((score - 20) / 15) * 34;
        }
        
        document.getElementById('results-title').textContent = title;
        document.getElementById('results-description').innerHTML = description;
        document.getElementById('quiz-scale-marker').style.left = markerPosition + '%';
        
        // Scroll to results
        results.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    
    // Retry
    retryBtn.addEventListener('click', function() {
        form.reset();
        form.hidden = false;
        results.hidden = true;
        updateProgress();
        questions.forEach(q => q.classList.remove('answered'));
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    
    // Initial state
    updateProgress();
    
    // Consultation Modal
    const modal = document.getElementById('consultation-modal');
    const modalForm = document.getElementById('consultation-modal-form');
    const modalSuccess = document.getElementById('consultation-modal-success');
    const openBtns = document.querySelectorAll('[data-consultation-open]');
    const closeBtns = document.querySelectorAll('[data-consultation-close]');
    
    if (modal) {
        function openModal(e) {
            e.preventDefault();
            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            modalForm.reset();
            modalForm.hidden = false;
            modalSuccess.hidden = true;
        }
        
        function closeModal() {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
        
        openBtns.forEach(btn => btn.addEventListener('click', openModal));
        closeBtns.forEach(btn => btn.addEventListener('click', closeModal));
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });
        
        if (modalForm && typeof rosenbergAjax !== 'undefined') {
            modalForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = modalForm.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Відправка...';
                }
                
                const formData = new FormData(modalForm);
                formData.append('action', 'rosenberg_form_submission');
                formData.append('nonce', rosenbergAjax.nonce);
                formData.append('form_id', 'quiz-ipss-consultation');
                
                fetch(rosenbergAjax.ajaxurl, { method: 'POST', body: formData })
                .then(r => r.json())
                .then(data => {
                    if (data.success) {
                        modalForm.hidden = true;
                        modalSuccess.hidden = false;
                        setTimeout(closeModal, 3000);
                    } else {
                        alert(data.data || 'Помилка');
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Зателефонувати мені';
                        }
                    }
                })
                .catch(() => {
                    modalForm.hidden = true;
                    modalSuccess.hidden = false;
                    setTimeout(closeModal, 3000);
                });
            });
        }
    }
});
</script>

<?php get_footer(); ?>
