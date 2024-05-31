describe("Blackjack Game", () => {
    it("should allow a user to register and login", () => {
        cy.visit("/register");
        cy.get("input[name=\"username\"]").type("testuser");
        cy.get("input[name=\"password\"]").type("password");
        cy.get("button[type=\"submit\"]").click();
        cy.contains("Registration successful");

        cy.visit("/login");
        cy.get("input[name=\"username\"]").type("testuser");
        cy.get("input[name=\"password\"]").type("password");
        cy.get("button[type=\"submit\"]").click();
        cy.contains("Welcome testuser");
    });

    it("should allow a user to play a game of blackjack", () => {
        cy.visit("/login");
        cy.get("input[name=\"username\"]").type("testuser");
        cy.get("input[name=\"password\"]").type("password");
        cy.get("button[type=\"submit\"]").click();
        cy.contains("New game").click();
        cy.contains("Game started successfully");
        // Additional game interactions here
    });
});
