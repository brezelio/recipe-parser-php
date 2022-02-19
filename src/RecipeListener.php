<?php

/*
 * Generated from src/Recipe.g4 by ANTLR 4.9.3
 */

namespace Brezel\Recipe\Parser;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see Recipe}.
 */
interface RecipeListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see Recipe::main()}.
	 * @param $context The parse tree.
	 */
	public function enterMain(Context\MainContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::main()}.
	 * @param $context The parse tree.
	 */
	public function exitMain(Context\MainContext $context) : void;
	/**
	 * Enter a parse tree produced by the `TemplateStringExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterTemplateStringExpression(Context\TemplateStringExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `TemplateStringExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitTemplateStringExpression(Context\TemplateStringExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `PowerExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterPowerExpression(Context\PowerExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `PowerExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitPowerExpression(Context\PowerExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `BitwiseXorExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBitwiseXorExpression(Context\BitwiseXorExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `BitwiseXorExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBitwiseXorExpression(Context\BitwiseXorExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `UnaryExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpression(Context\UnaryExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `UnaryExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpression(Context\UnaryExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `OrExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterOrExpression(Context\OrExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `OrExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitOrExpression(Context\OrExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `MatchExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMatchExpression(Context\MatchExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `MatchExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMatchExpression(Context\MatchExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `CoalescingExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterCoalescingExpression(Context\CoalescingExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `CoalescingExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitCoalescingExpression(Context\CoalescingExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `AnonymousFunctionExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAnonymousFunctionExpression(Context\AnonymousFunctionExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `AnonymousFunctionExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAnonymousFunctionExpression(Context\AnonymousFunctionExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `AndExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAndExpression(Context\AndExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `AndExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAndExpression(Context\AndExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `SubscriptExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterSubscriptExpression(Context\SubscriptExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `SubscriptExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitSubscriptExpression(Context\SubscriptExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `WildcardExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterWildcardExpression(Context\WildcardExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `WildcardExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitWildcardExpression(Context\WildcardExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `EqualityExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterEqualityExpression(Context\EqualityExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `EqualityExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitEqualityExpression(Context\EqualityExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `CallExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterCallExpression(Context\CallExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `CallExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitCallExpression(Context\CallExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `BitwiseOrExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBitwiseOrExpression(Context\BitwiseOrExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `BitwiseOrExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBitwiseOrExpression(Context\BitwiseOrExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `ParenthesizedExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterParenthesizedExpression(Context\ParenthesizedExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `ParenthesizedExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitParenthesizedExpression(Context\ParenthesizedExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `RelationalExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterRelationalExpression(Context\RelationalExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `RelationalExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitRelationalExpression(Context\RelationalExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `LiteralExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteralExpression(Context\LiteralExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `LiteralExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteralExpression(Context\LiteralExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `ConditionalExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterConditionalExpression(Context\ConditionalExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `ConditionalExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitConditionalExpression(Context\ConditionalExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `VariableExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableExpression(Context\VariableExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `VariableExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableExpression(Context\VariableExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `ConcatExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterConcatExpression(Context\ConcatExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `ConcatExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitConcatExpression(Context\ConcatExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `ShiftExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterShiftExpression(Context\ShiftExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `ShiftExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitShiftExpression(Context\ShiftExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `MethodExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodExpression(Context\MethodExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `MethodExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodExpression(Context\MethodExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `BitwiseAndExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterBitwiseAndExpression(Context\BitwiseAndExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `BitwiseAndExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitBitwiseAndExpression(Context\BitwiseAndExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `MemberExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMemberExpression(Context\MemberExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `MemberExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMemberExpression(Context\MemberExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `AddExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAddExpression(Context\AddExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `AddExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAddExpression(Context\AddExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `MultExpression`
	 * labeled alternative in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMultExpression(Context\MultExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `MultExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMultExpression(Context\MultExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::anonymousFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterAnonymousFunction(Context\AnonymousFunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::anonymousFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitAnonymousFunction(Context\AnonymousFunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::arrowExpressionHead()}.
	 * @param $context The parse tree.
	 */
	public function enterArrowExpressionHead(Context\ArrowExpressionHeadContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::arrowExpressionHead()}.
	 * @param $context The parse tree.
	 */
	public function exitArrowExpressionHead(Context\ArrowExpressionHeadContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::parameterListOpt()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterListOpt(Context\ParameterListOptContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::parameterListOpt()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterListOpt(Context\ParameterListOptContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::parameterList()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterList(Context\ParameterListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::parameterList()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterList(Context\ParameterListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::matchExpressionHead()}.
	 * @param $context The parse tree.
	 */
	public function enterMatchExpressionHead(Context\MatchExpressionHeadContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::matchExpressionHead()}.
	 * @param $context The parse tree.
	 */
	public function exitMatchExpressionHead(Context\MatchExpressionHeadContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::matchExpressionBody()}.
	 * @param $context The parse tree.
	 */
	public function enterMatchExpressionBody(Context\MatchExpressionBodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::matchExpressionBody()}.
	 * @param $context The parse tree.
	 */
	public function exitMatchExpressionBody(Context\MatchExpressionBodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::matchEntry()}.
	 * @param $context The parse tree.
	 */
	public function enterMatchEntry(Context\MatchEntryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::matchEntry()}.
	 * @param $context The parse tree.
	 */
	public function exitMatchEntry(Context\MatchEntryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::expressionEnumeration()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionEnumeration(Context\ExpressionEnumerationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::expressionEnumeration()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionEnumeration(Context\ExpressionEnumerationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::parentheses()}.
	 * @param $context The parse tree.
	 */
	public function enterParentheses(Context\ParenthesesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::parentheses()}.
	 * @param $context The parse tree.
	 */
	public function exitParentheses(Context\ParenthesesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::listLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterListLiteral(Context\ListLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::listLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitListLiteral(Context\ListLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::dictLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterDictLiteral(Context\DictLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::dictLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitDictLiteral(Context\DictLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::keyValues()}.
	 * @param $context The parse tree.
	 */
	public function enterKeyValues(Context\KeyValuesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::keyValues()}.
	 * @param $context The parse tree.
	 */
	public function exitKeyValues(Context\KeyValuesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::spreadExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterSpreadExpression(Context\SpreadExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::spreadExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitSpreadExpression(Context\SpreadExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::keyValue()}.
	 * @param $context The parse tree.
	 */
	public function enterKeyValue(Context\KeyValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::keyValue()}.
	 * @param $context The parse tree.
	 */
	public function exitKeyValue(Context\KeyValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::enumeration()}.
	 * @param $context The parse tree.
	 */
	public function enterEnumeration(Context\EnumerationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::enumeration()}.
	 * @param $context The parse tree.
	 */
	public function exitEnumeration(Context\EnumerationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::enumerationOpt()}.
	 * @param $context The parse tree.
	 */
	public function enterEnumerationOpt(Context\EnumerationOptContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::enumerationOpt()}.
	 * @param $context The parse tree.
	 */
	public function exitEnumerationOpt(Context\EnumerationOptContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::variable()}.
	 * @param $context The parse tree.
	 */
	public function enterVariable(Context\VariableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::variable()}.
	 * @param $context The parse tree.
	 */
	public function exitVariable(Context\VariableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::identifier()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::identifier()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::templateString()}.
	 * @param $context The parse tree.
	 */
	public function enterTemplateString(Context\TemplateStringContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::templateString()}.
	 * @param $context The parse tree.
	 */
	public function exitTemplateString(Context\TemplateStringContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see Recipe::template()}.
	 * @param $context The parse tree.
	 */
	public function enterTemplate(Context\TemplateContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see Recipe::template()}.
	 * @param $context The parse tree.
	 */
	public function exitTemplate(Context\TemplateContext $context) : void;
}