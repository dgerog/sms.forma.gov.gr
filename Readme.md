#  SMS για το forma.gov.gr (Με χρονικούς περιορισμούς στις επιλογές)

Αυτοματοποίηση της διαδικασίας αποστολής SMS στο πλαίσιο της απαγόρευσης εξόδου. Τα στοιχεία αποθηκεύονται σε cookies και συμπληρώνονται αυτόματα κάθε φορά που ανανεώνεται η σελίδα. 

Η σελίδα στην ουσία δημιουργεί ένα sms uri για να εκκινήσει η διαδικασία αποστολής.

Υποστηρίζεται η πολυγλωσσικότητα. Για να προσθέσετε μια γλώσσα:

1. Στον φάκελο localization προσθέστε στο αρχείο languages.php τη νέα γλώσσα (υπάρχουν οδηγίες στα σχόλια για το πώς θα προσθέσετε τη νέα γλώσσα)
2. Δημιουργείστε ένα νέα αρχείο <lang-code>.php μέσα στον φάκελο localization, όπου το <lang-code> είναι ο κωδικός της γλώωσας (language key), όπως το δηλώσετε στο αρχείο languages.php
3. Αντιγράψτε τα περιεχόμενα από το el.php στο αρχείο που δημιουργήσατε και μεταφράστε τα κείμενα.
4. Η νέα γλώσσα θα εμφανιστεί αυτόματα στην κεντρική σελίδα (index.php)

## Authors

* **Demetris Gerogiannis (aka DpG)**

## Contributors

* **Dionisis Skordoulis**: For some security improvements.
* **Farhan Sejdeh**: For providing the Farsi/Persian tranalation.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
