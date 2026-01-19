<?php
/**
 * Template Name: Quiz NIH-CPSI
 */

get_header();
?>

<!-- Quiz Hero -->
<section class="quiz-hero">
    <div class="quiz-hero-content">
        <p class="quiz-hero-label">ТЕСТУВАННЯ</p>
        <h1 class="quiz-hero-title">NIH-CPSI</h1>
        <p class="quiz-hero-subtitle">Індекс симптомів хронічного простатиту</p>
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
        <p>Відповівши на запитання цього опитувальника, Ви зможете оцінити вираженість симптомів хронічного простатиту та синдрому тазових болів</p>
        <div class="quiz-intro-note">
            <span>9 запитань</span>
            <span>~4 хвилини</span>
        </div>
    </div>
</section>

<!-- Quiz Form -->
<section class="quiz-section">
    <div class="quiz-container">
        <form id="nih-cpsi-quiz-form" class="quiz-form">
            
            <!-- Question 1 -->
            <div class="quiz-question" data-question="1">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">01</span>
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували біль або дискомфорт у ділянці між прямою кишкою та яєчками (промежині)?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q1" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
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
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували біль або дискомфорт в яєчках?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q2" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
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
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували біль або дискомфорт на кінчику статевого члена (не пов'язаний із сечовипусканням)?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q3" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
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
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували біль або дискомфорт нижче пупка, в лобковій або надлобковій ділянці?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q4" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
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
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували біль або печіння при сечовипусканні?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q5" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
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
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували біль або дискомфорт під час або після еякуляції (сім'явипорскування)?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q6" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
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
                    <h3 class="quiz-question-title">Як би Ви оцінили інтенсивність болю за останній тиждень за шкалою від 0 до 10?</h3>
                </div>
                <div class="quiz-options quiz-options-scale">
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">0 — Болю немає</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">1</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">2</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">3</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">4</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">5</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="6">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">6</span>
                            <span class="quiz-option-score">6</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="7">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">7</span>
                            <span class="quiz-option-score">7</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="8">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">8</span>
                            <span class="quiz-option-score">8</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="9">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">9</span>
                            <span class="quiz-option-score">9</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q7" value="10">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">10 — Нестерпний біль</span>
                            <span class="quiz-option-score">10</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="quiz-question" data-question="8">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">08</span>
                    <h3 class="quiz-question-title">Як часто за останній тиждень Ви відчували необхідність мочитися частіше, ніж кожні 2 години?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q8" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніколи</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q8" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Рідко</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q8" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Іноді</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q8" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Часто</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q8" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже часто</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q8" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Майже завжди</span>
                            <span class="quiz-option-score">5</span>
                        </span>
                    </label>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="quiz-question" data-question="9">
                <div class="quiz-question-header">
                    <span class="quiz-question-number">09</span>
                    <h3 class="quiz-question-title">Як сильно симптоми вплинули на якість Вашого життя за останній тиждень?</h3>
                </div>
                <div class="quiz-options">
                    <label class="quiz-option">
                        <input type="radio" name="q9" value="0" required>
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Ніяк не вплинули</span>
                            <span class="quiz-option-score">0</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q9" value="1">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Незначно</span>
                            <span class="quiz-option-score">1</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q9" value="2">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Помітно</span>
                            <span class="quiz-option-score">2</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q9" value="3">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Значно</span>
                            <span class="quiz-option-score">3</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q9" value="4">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Дуже сильно</span>
                            <span class="quiz-option-score">4</span>
                        </span>
                    </label>
                    <label class="quiz-option">
                        <input type="radio" name="q9" value="5">
                        <span class="quiz-option-box">
                            <span class="quiz-option-check"></span>
                            <span class="quiz-option-text">Надзвичайно сильно</span>
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
                    <span class="quiz-progress-text"><span id="answered-count">0</span> / 9 запитань</span>
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
                    <span class="quiz-results-max">/ 43</span>
                </div>
                <h2 class="quiz-results-title" id="results-title">Результат</h2>
            </div>
            
            <div class="quiz-results-scale">
                <div class="quiz-scale-bar">
                    <div class="quiz-scale-segment quiz-scale-mild">0-14</div>
                    <div class="quiz-scale-segment quiz-scale-moderate">15-29</div>
                    <div class="quiz-scale-segment quiz-scale-severe">30-43</div>
                </div>
                <div class="quiz-scale-labels">
                    <span>М'яка</span>
                    <span>Помірна</span>
                    <span>Виражена</span>
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
            <input type="hidden" name="service" value="Консультація після квізу NIH-CPSI">
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
    const form = document.getElementById('nih-cpsi-quiz-form');
    const results = document.getElementById('quiz-results');
    const progressFill = document.getElementById('quiz-progress-fill');
    const answeredCount = document.getElementById('answered-count');
    const submitBtn = document.getElementById('quiz-submit');
    const retryBtn = document.getElementById('quiz-retry');
    
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
        submitBtn.disabled = answered < totalQuestions;
    }
    
    form.querySelectorAll('input[type="radio"]').forEach(input => {
        input.addEventListener('change', function() {
            updateProgress();
            this.closest('.quiz-question').classList.add('answered');
        });
    });
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let score = 0;
        for (let i = 1; i <= totalQuestions; i++) {
            const checked = form.querySelector(`input[name="q${i}"]:checked`);
            if (checked) {
                score += parseInt(checked.value);
            }
        }
        
        showResults(score);
    });
    
    function showResults(score) {
        form.hidden = true;
        results.hidden = false;
        
        document.getElementById('results-score').textContent = score;
        
        let title, description, markerPosition;
        
        if (score <= 14) {
            title = 'М\'яка симптоматика';
            description = `
                <p>Ваш результат: <strong>${score} балів</strong> — симптоми хронічного простатиту м'яко виражені або відсутні.</p>
                <p>Рекомендації:</p>
                <ul>
                    <li>Продовжуйте вести здоровий спосіб життя</li>
                    <li>Регулярно проходьте профілактичні огляди</li>
                    <li>Зверніться до уролога при появі нових симптомів</li>
                </ul>
            `;
            markerPosition = (score / 14) * 33;
        } else if (score <= 29) {
            title = 'Помірна симптоматика';
            description = `
                <p>Ваш результат: <strong>${score} балів</strong> — симптоми хронічного простатиту помірно виражені.</p>
                <p>Рекомендації:</p>
                <ul>
                    <li>Рекомендується консультація уролога</li>
                    <li>Може знадобитися додаткове обстеження</li>
                    <li>Лікування може включати медикаментозну терапію</li>
                    <li>Важливо не ігнорувати симптоми</li>
                </ul>
            `;
            markerPosition = 33 + ((score - 15) / 15) * 33;
        } else {
            title = 'Виражена симптоматика';
            description = `
                <p>Ваш результат: <strong>${score} балів</strong> — симптоми хронічного простатиту значно виражені.</p>
                <p>Рекомендації:</p>
                <ul>
                    <li><strong>Обов'язково зверніться до уролога</strong></li>
                    <li>Необхідне комплексне обстеження</li>
                    <li>Може знадобитися активне лікування</li>
                    <li>Не відкладайте візит до лікаря</li>
                </ul>
            `;
            markerPosition = 66 + ((score - 30) / 13) * 34;
        }
        
        document.getElementById('results-title').textContent = title;
        document.getElementById('results-description').innerHTML = description;
        document.getElementById('quiz-scale-marker').style.left = markerPosition + '%';
        
        results.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    
    retryBtn.addEventListener('click', function() {
        form.reset();
        form.hidden = false;
        results.hidden = true;
        updateProgress();
        questions.forEach(q => q.classList.remove('answered'));
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    
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
                formData.append('form_id', 'quiz-nih-cpsi-consultation');
                
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
