Feature: Web pages

  Scenario: Walc wiedeński jest szybszą odmianą walca.
    Given I am on homepage
    When I follow "Walc wiedeński"
    Then I should see "Walc wiedeński jest szybszą odmianą walca."