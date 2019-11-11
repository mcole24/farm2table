# farm2table

## Create food_items table

```
CREATE TABLE IF NOT EXISTS food_items(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    item VARCHAR(100) NOT NULL,
    quantity INT,
    expire_date DATE
);
```
