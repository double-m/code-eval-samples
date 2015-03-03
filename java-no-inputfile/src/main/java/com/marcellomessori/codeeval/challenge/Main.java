package com.marcellomessori.codeeval.challenge;

public class Main {

	public static void main(String[] args) {
		Challenge challenge = new Challenge();
		System.out.println(challenge.play("Hello World!"));
	}
}

class Challenge {

	public String play(String input) {
		return processInput(input);
	}

	// TODO change this
	protected String processInput(String input) {
		return input;
	}
}
