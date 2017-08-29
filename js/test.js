	var correctAnswers = 0;

	/**
	 * Init online test and levels array
	 */
	function initialiseArray()
	{
		// Init question & answers array
					questionsArray[0] = new Array()
			questionsArray[0][0] = 'Scegli la risposta giusta : <strong>Eros Ramazzotti ...... un cantante molto famoso.</strong>';
			questionsArray[0][1] = 'c\'è';
			questionsArray[0][2] = 'è';
			questionsArray[0][3] = 'ha';

			
			answersArray[0] = 2;

			mistakesArray[0] = true;
					questionsArray[1] = new Array()
			questionsArray[1][0] = 'Scegli la risposta giusta : <strong>Io ...... 28 anni.</strong>';
			questionsArray[1][1] = 'ho';
			questionsArray[1][2] = 'sono ';
			questionsArray[1][3] = 'a';

			
			answersArray[1] = 1;

			mistakesArray[1] = true;
					questionsArray[2] = new Array()
			questionsArray[2][0] = 'Scegli la risposta giusta : <strong>...... fratello di Maria è molto carino.</strong>';
			questionsArray[2][1] = 'la';
			questionsArray[2][2] = 'il';
			questionsArray[2][3] = 'lo';

			
			answersArray[2] = 2;

			mistakesArray[2] = true;
					questionsArray[3] = new Array()
			questionsArray[3][0] = 'Scegli la risposta giusta : <strong>Paolo ha ...... macchina rossa.</strong>';
			questionsArray[3][1] = 'un\' ';
			questionsArray[3][2] = 'un ';
			questionsArray[3][3] = 'una';

			
			answersArray[3] = 3;

			mistakesArray[3] = true;
					questionsArray[4] = new Array()
			questionsArray[4][0] = 'Scegli la risposta giusta : <strong>...... lavora in un ufficio importante.</strong>';
			questionsArray[4][1] = 'Mia padre';
			questionsArray[4][2] = 'Il mio padre ';
			questionsArray[4][3] = 'Mio padre';

			
			answersArray[4] = 3;

			mistakesArray[4] = true;
					questionsArray[5] = new Array()
			questionsArray[5][0] = 'Scegli la risposta giusta : <strong>Io ...... italiano da tre anni.</strong>';
			questionsArray[5][1] = 'studia';
			questionsArray[5][2] = 'studio';
			questionsArray[5][3] = 'studiam';

			
			answersArray[5] = 2;

			mistakesArray[5] = true;
					questionsArray[6] = new Array()
			questionsArray[6][0] = 'Scegli la risposta giusta : <strong>I miei amici ...... tutte le sere.</strong>';
			questionsArray[6][1] = 'escono';
			questionsArray[6][2] = 'usciono';
			questionsArray[6][3] = 'uscono';

			
			answersArray[6] = 1;

			mistakesArray[6] = true;
					questionsArray[7] = new Array()
			questionsArray[7][0] = 'Scegli la risposta giusta : <strong>Cinzia ...... una lettera ai suoi genitori ogni settimana.</strong>';
			questionsArray[7][1] = 'scriva ';
			questionsArray[7][2] = 'scrive ';
			questionsArray[7][3] = 'scrivi';

			
			answersArray[7] = 2;

			mistakesArray[7] = true;
					questionsArray[8] = new Array()
			questionsArray[8][0] = 'Scegli la risposta giusta : <strong>Cameriere, vorrei un piatto ...... spaghetti, per favore.</strong>';
			questionsArray[8][1] = 'di';
			questionsArray[8][2] = 'con';
			questionsArray[8][3] = 'al';

			
			answersArray[8] = 1;

			mistakesArray[8] = true;
					questionsArray[9] = new Array()
			questionsArray[9][0] = 'Scegli la risposta giusta : <strong>Noi abitiamo vicino ...... stazione.</strong>';
			questionsArray[9][1] = 'della ';
			questionsArray[9][2] = 'alla ';
			questionsArray[9][3] = 'di';

			
			answersArray[9] = 2;

			mistakesArray[9] = true;
					questionsArray[10] = new Array()
			questionsArray[10][0] = 'Scegli la risposta giusta : <strong>...... parlare italiano ?</strong>';
			questionsArray[10][1] = 'puoi';
			questionsArray[10][2] = 'conosci';
			questionsArray[10][3] = 'sai';

			
			answersArray[10] = 3;

			mistakesArray[10] = true;
					questionsArray[11] = new Array()
			questionsArray[11][0] = 'Scegli la risposta giusta : <strong>L\'anno scorso ...... a Roma.</strong>';
			questionsArray[11][1] = 'siamo andati ';
			questionsArray[11][2] = 'abbiamo andati ';
			questionsArray[11][3] = 'siamo andato';

			
			answersArray[11] = 1;

			mistakesArray[11] = true;
					questionsArray[12] = new Array()
			questionsArray[12][0] = 'Scegli la risposta giusta : <strong>Ieri sera ...... a Sandra, ma non era in casa.</strong>';
			questionsArray[12][1] = 'ho telefonato ';
			questionsArray[12][2] = 'ho telefonata ';
			questionsArray[12][3] = 'sono telefonato';

			
			answersArray[12] = 1;

			mistakesArray[12] = true;
					questionsArray[13] = new Array()
			questionsArray[13][0] = 'Scegli la risposta giusta : <strong>Quando ...... a Roma, abbiamo visitato San Pietro.</strong>';
			questionsArray[13][1] = 'evavamo';
			questionsArray[13][2] = 'avevamo ';
			questionsArray[13][3] = 'eravamo';

			
			answersArray[13] = 3;

			mistakesArray[13] = true;
					questionsArray[14] = new Array()
			questionsArray[14][0] = 'Scegli la risposta giusta : <strong>L\'anno prossimo io e Mario ...... .</strong>';
			questionsArray[14][1] = 'si sposeremo';
			questionsArray[14][2] = 'ci sposaremo ';
			questionsArray[14][3] = 'ci sposeremo';

			
			answersArray[14] = 3;

			mistakesArray[14] = true;
					questionsArray[15] = new Array()
			questionsArray[15][0] = 'Scegli la risposta giusta : <strong>Quel ragazzo, non ...... voglio vedere mai più!</strong>';
			questionsArray[15][1] = 'lo';
			questionsArray[15][2] = 'ci ';
			questionsArray[15][3] = 'gli';

			
			answersArray[15] = 1;

			mistakesArray[15] = true;
					questionsArray[16] = new Array()
			questionsArray[16][0] = 'Scegli la risposta giusta : <strong>Ho telefonato a Simona e ...... ho detto tutta la verità.</strong>';
			questionsArray[16][1] = 'la ';
			questionsArray[16][2] = 'le ';
			questionsArray[16][3] = 'gli';

			
			answersArray[16] = 2;

			mistakesArray[16] = true;
					questionsArray[17] = new Array()
			questionsArray[17][0] = 'Scegli la risposta giusta : <strong>Non ...... posso più di tutto questo rumore!</strong>';
			questionsArray[17][1] = 'ci ';
			questionsArray[17][2] = 'lo ';
			questionsArray[17][3] = 'ne';

			
			answersArray[17] = 3;

			mistakesArray[17] = true;
					questionsArray[18] = new Array()
			questionsArray[18][0] = 'Scegli la risposta giusta : <strong>Mio fratello è ...... tuo cugino.</strong>';
			questionsArray[18][1] = 'più alto che';
			questionsArray[18][2] = 'il più alto di';
			questionsArray[18][3] = 'più alto di';

			
			answersArray[18] = 3;

			mistakesArray[18] = true;
					questionsArray[19] = new Array()
			questionsArray[19][0] = 'Scegli la risposta giusta : <strong>Il libro ...... mi hai tanto parlato era veramente interessante.</strong>';
			questionsArray[19][1] = 'che ';
			questionsArray[19][2] = 'di cui ';
			questionsArray[19][3] = 'chi';

			
			answersArray[19] = 2;

			mistakesArray[19] = true;
					questionsArray[20] = new Array()
			questionsArray[20][0] = 'Scegli la risposta giusta : <strong>Pronto? Sì, la Signora è in casa, ...... passo subito.</strong>';
			questionsArray[20][1] = 'gliela ';
			questionsArray[20][2] = 'la ';
			questionsArray[20][3] = 'glila';

			
			answersArray[20] = 1;

			mistakesArray[20] = true;
					questionsArray[21] = new Array()
			questionsArray[21][0] = 'Scegli la risposta giusta : <strong>Marco, ...... subito a letto!</strong>';
			questionsArray[21][1] = 'vai ';
			questionsArray[21][2] = 'anda ';
			questionsArray[21][3] = 'va\'';

			
			answersArray[21] = 3;

			mistakesArray[21] = true;
					questionsArray[22] = new Array()
			questionsArray[22][0] = 'Scegli la risposta giusta : <strong>Signore, ...... mi può dire l\'ora?</strong>';
			questionsArray[22][1] = 'scusami ';
			questionsArray[22][2] = 'mi scusa ';
			questionsArray[22][3] = 'mi scusi ';

			
			answersArray[22] = 3;

			mistakesArray[22] = true;
					questionsArray[23] = new Array()
			questionsArray[23][0] = 'Scegli la risposta giusta : <strong>Cristina ...... fare un corso di cucina, ma non ha tempo libero.</strong>';
			questionsArray[23][1] = 'volerebbe ';
			questionsArray[23][2] = 'vorrebbe ';
			questionsArray[23][3] = 'vorrei';

			
			answersArray[23] = 2;

			mistakesArray[23] = true;
					questionsArray[24] = new Array()
			questionsArray[24][0] = 'Scegli la risposta giusta : <strong>Credo che i nostri amici ...... questa mattina.</strong>';
			questionsArray[24][1] = 'partano ';
			questionsArray[24][2] = 'partono ';
			questionsArray[24][3] = 'partiranno';

			
			answersArray[24] = 1;

			mistakesArray[24] = true;
					questionsArray[25] = new Array()
			questionsArray[25][0] = 'Scegli la risposta giusta : <strong>Pensavo che ...... anche il tuo amico alla festa.</strong>';
			questionsArray[25][1] = 'veniva';
			questionsArray[25][2] = 'venisse';
			questionsArray[25][3] = 'venga';

			
			answersArray[25] = 2;

			mistakesArray[25] = true;
					questionsArray[26] = new Array()
			questionsArray[26][0] = 'Scegli la risposta giusta : <strong>Sarei venuta al concerto, se ...... i biglietti.</strong>';
			questionsArray[26][1] = 'trovassi';
			questionsArray[26][2] = 'avrei trovato';
			questionsArray[26][3] = 'avessi trovato ';

			
			answersArray[26] = 3;

			mistakesArray[26] = true;
					questionsArray[27] = new Array()
			questionsArray[27][0] = 'Scegli la risposta giusta : <strong>Compreremo la casa, ...... la banca ci faccia un prestito.</strong>';
			questionsArray[27][1] = 'purché';
			questionsArray[27][2] = 'affinché';
			questionsArray[27][3] = 'perché';

			
			answersArray[27] = 1;

			mistakesArray[27] = true;
					questionsArray[28] = new Array()
			questionsArray[28][0] = 'Scegli la risposta giusta : <strong>Non ho capito ...... di quello che ha detto il professore.</strong>';
			questionsArray[28][1] = 'nessuno ';
			questionsArray[28][2] = 'niente ';
			questionsArray[28][3] = 'qualcosa';

			
			answersArray[28] = 2;

			mistakesArray[28] = true;
					questionsArray[29] = new Array()
			questionsArray[29][0] = 'Scegli la risposta giusta : <strong>Avrei fatto ...... cosa per te!</strong>';
			questionsArray[29][1] = 'qualunque ';
			questionsArray[29][2] = 'ogni ';
			questionsArray[29][3] = 'tutto';

			
			answersArray[29] = 1;

			mistakesArray[29] = true;
		
		// Init levels
					levelArray[0] = new Array();
			levelArray[0]['lower'] = 0;
			levelArray[0]['upper'] = 5;
			levelArray[0]['case'] = `Ваш примерный уровень: Элементарный - А1<br />
Вам нужно ещё поработать!<br />
Мы можем помочь вам перейти на следующий уровень!`;
					levelArray[1] = new Array();
			levelArray[1]['lower'] = 6;
			levelArray[1]['upper'] = 13;
			levelArray[1]['case'] = `Ваш примерный уровень: Ниже среднего - А2<br />
Вам нужно ещё поработать!<br />
Мы можем помочь вам перейти на следующий уровень!`;
					levelArray[2] = new Array();
			levelArray[2]['lower'] = 14;
			levelArray[2]['upper'] = 18;
			levelArray[2]['case'] = `Ваш примерный уровень: Промежуточный - А2-В1<br />
Не плохо!<br />
Мы можем помочь вам перейти на следующий уровень!`;
					levelArray[3] = new Array();
			levelArray[3]['lower'] = 19;
			levelArray[3]['upper'] = 24;
			levelArray[3]['case'] = `Ваш примерный уровень: Выше среднего - В1<br />
Не плохо!<br />
Мы можем помочь вам перейти на следующий уровень!`;
					levelArray[4] = new Array();
			levelArray[4]['lower'] = 25;
			levelArray[4]['upper'] = 30;
			levelArray[4]['case'] = `Ваш примерный уровень: Продвинутый - С1<br />
Отличная работа!<br />
Мы можем помочь вам перейти на следующий уровень!`;
			}

	/**
	 * Init a new question
	 */
	function displayQuestion()
	{
		questionTitle.innerHTML = 'Вопрос ' + (questionNumber + 1) + ' / ' + questionsArray.length;

		questionSplit = questionsArray[questionNumber][0].split('<br />');
		if (questionSplit.length > 1) {
			questionDefinition.innerHTML = questionSplit[0];
			delete questionSplit[0];
			questionText.innerHTML = questionSplit.join('<br />');
		} else {
			questionDefinition.innerHTML = '';
			questionText.innerHTML = questionSplit[0];
		}

		var questionOption = document.createElement('div');

		for (cpt=1; cpt<=questionsArray[questionNumber].length - 1; cpt++) {

			var box = document.createElement('div');
			box.className = 'm-b-smaller';

			// Create input
			var input = document.createElement('input', 's-radiobox');
				input.type = 'radio';
				input.id = 'radioOption_' + cpt;
				input.name = 'radioOption';
				// input.class = 'test_form_option';

				if (cpt == 1) input.checked = 'checked';

			// Create label
			var label = document.createElement('label');
				label.setAttribute('for', 'radioOption_' + cpt);
				label.className = 'form-group';

			// Create label text
			var span = document.createElement('span');
			var text = document.createTextNode(questionsArray[questionNumber][cpt]);
			span.appendChild(text);

			label.appendChild(input);
			label.appendChild(span);

			box.appendChild(label);
			questionOption.appendChild(box);
		}

		questionOptions.innerHTML = '';
		questionOptions.appendChild(questionOption);
	}

	/**
	 * Change action button and start quiz
	 */
	function buttonStart_onclick()
	{
		questionButton.innerHTML = '<input type="button" class="test-page_form_button-answer" name="buttonAnswer" id="buttonAnswer" value="Следующий вопрос" onclick="return buttonAnswer_onclick()"/>';
		displayQuestion();
	}

	/**
	 * Calculate and publish results
	 */
	function buttonAnswer_onclick()
	{
		checkAnswer();
		if(questionNumber < answersArray.length - 1) {
			questionNumber++;
			displayQuestion();
		} else {
			questionTitle.innerHTML = 'Результаты и ответы на тест';

			for (var i=0; i < levelArray.length; i++) {
				if (correctAnswers >= levelArray[i]['lower'] && correctAnswers <= levelArray[i]['upper']) {
					var level = levelArray[i]['case'];
					break;
				}
			}

			// Format response lolz
			var responseLabel = 'Вы ответили правильно на :correct вопросов из :total!';
			responseLabel = responseLabel.replace(/:correct/, correctAnswers);
			responseLabel = responseLabel.replace(/:total/, answersArray.length);
			questionDefinition.innerHTML = responseLabel;
			
			questionText.innerHTML = '<p class="test-results">' + level + '</p>';

			var answersText = ""; var answerCounter;

			for (answerCounter=0; answerCounter < answersArray.length; answerCounter++) {
				var myclass = mistakesArray[answerCounter] ? 'icon-error':'icon-success';
				answersText = answersText + '<p><i class="' + myclass + '"></i> <strong class="test_question-strong">Вопрос ' + (answerCounter+1) + ': </strong> <br>' + questionsArray[answerCounter][0] + '<br><span>Ответ: </span>' + questionsArray[answerCounter][answersArray[answerCounter]] + '</p>';
			}

			questionOptions.innerHTML = answersText;
			questionButton.parentNode.removeChild(questionButton);
		}
	}

	/**
	 * Check if answer is ok or not
	 */
	function checkAnswer()
	{
		var questionOption;

		var radioOptionArray = document.querySelectorAll('input[name="radioOption"]');
		for (questionOption=0; questionOption<=3; questionOption++) {
			if (radioOptionArray[questionOption].checked == true) {
				questionOption++;
				break;
			}
		}

		if (questionOption == answersArray[questionNumber]) {
			correctAnswers++;
			mistakesArray[questionNumber]=false;
		}
	}

var questionNumber = 0;
	var questionsArray = new Array();
	var answersArray = new Array();
	var mistakesArray = new Array();
	var levelArray = new Array();
	var questionTitle = document.getElementById("questionTitle");
	var questionText = document.getElementById("questionText");
	var questionDefinition = document.getElementById("questionDefinition");
	var questionOptions = document.getElementById("questionOptions");
	var questionButton = document.getElementById("questionButton");

	initialiseArray();