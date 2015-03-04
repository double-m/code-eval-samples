package com.marcellomessori.codeeval.challenge;

import static org.junit.Assert.*;
import java.io.File;
import org.junit.After;
import org.junit.Before;
import org.junit.Ignore;
import org.junit.Test;

public class MainTest {

	Challenge challenge = new Challenge(new File("src/main/resources/input-file.txt"));
	
    @Before
    public void setUp() {
    }

    @After
    public void tearDown() {
    }

	@Test
	public void shouldDoSomething() {
		assertTrue(true);
	}
	
	@Ignore
	public void shouldPassSomeFunctionalTest() {
		
	}

}
	