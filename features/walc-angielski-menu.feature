Feature: Web pages

  Scenario: Walc angielski należy do tańców standardowych.
    Given I am on homepage
    When I follow "Walc angielski"
    Then I should see "Walc angielski należy do tańców standardowych."