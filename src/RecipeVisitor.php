<?php

/*
 * Generated from src/Recipe.g4 by ANTLR 4.9.3
 */

namespace Brezel\Recipe\Parser;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see Recipe}.
 */
interface RecipeVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see Recipe::main()}.
	 *
	 * @param Context\MainContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMain(Context\MainContext $context);

	/**
	 * Visit a parse tree produced by the `TemplateStringExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\TemplateStringExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTemplateStringExpression(Context\TemplateStringExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `PowerExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\PowerExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPowerExpression(Context\PowerExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `BitwiseXorExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\BitwiseXorExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBitwiseXorExpression(Context\BitwiseXorExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `UnaryExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\UnaryExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryExpression(Context\UnaryExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `OrExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\OrExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrExpression(Context\OrExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `MatchExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\MatchExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMatchExpression(Context\MatchExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `CoalescingExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\CoalescingExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCoalescingExpression(Context\CoalescingExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `AnonymousFunctionExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\AnonymousFunctionExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnonymousFunctionExpression(Context\AnonymousFunctionExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `AndExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\AndExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndExpression(Context\AndExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `SubscriptExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\SubscriptExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubscriptExpression(Context\SubscriptExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `WildcardExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\WildcardExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWildcardExpression(Context\WildcardExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `EqualityExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\EqualityExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEqualityExpression(Context\EqualityExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `CallExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\CallExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCallExpression(Context\CallExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `BitwiseOrExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\BitwiseOrExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBitwiseOrExpression(Context\BitwiseOrExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ParenthesizedExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\ParenthesizedExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParenthesizedExpression(Context\ParenthesizedExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `RelationalExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\RelationalExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelationalExpression(Context\RelationalExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `LiteralExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\LiteralExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteralExpression(Context\LiteralExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ConditionalExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\ConditionalExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConditionalExpression(Context\ConditionalExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `VariableExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\VariableExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariableExpression(Context\VariableExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ConcatExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\ConcatExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConcatExpression(Context\ConcatExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ShiftExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\ShiftExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShiftExpression(Context\ShiftExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `MethodExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\MethodExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodExpression(Context\MethodExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `BitwiseAndExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\BitwiseAndExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBitwiseAndExpression(Context\BitwiseAndExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `MemberExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\MemberExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMemberExpression(Context\MemberExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `AddExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\AddExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddExpression(Context\AddExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `MultExpression` labeled alternative
	 * in {@see Recipe::expression()}.
	 *
	 * @param Context\MultExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultExpression(Context\MultExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::anonymousFunction()}.
	 *
	 * @param Context\AnonymousFunctionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnonymousFunction(Context\AnonymousFunctionContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::arrowExpressionHead()}.
	 *
	 * @param Context\ArrowExpressionHeadContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrowExpressionHead(Context\ArrowExpressionHeadContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::parameterListOpt()}.
	 *
	 * @param Context\ParameterListOptContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameterListOpt(Context\ParameterListOptContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::parameterList()}.
	 *
	 * @param Context\ParameterListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameterList(Context\ParameterListContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::matchExpressionHead()}.
	 *
	 * @param Context\MatchExpressionHeadContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMatchExpressionHead(Context\MatchExpressionHeadContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::matchExpressionBody()}.
	 *
	 * @param Context\MatchExpressionBodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMatchExpressionBody(Context\MatchExpressionBodyContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::matchEntry()}.
	 *
	 * @param Context\MatchEntryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMatchEntry(Context\MatchEntryContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::expressionEnumeration()}.
	 *
	 * @param Context\ExpressionEnumerationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionEnumeration(Context\ExpressionEnumerationContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::parentheses()}.
	 *
	 * @param Context\ParenthesesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParentheses(Context\ParenthesesContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::listLiteral()}.
	 *
	 * @param Context\ListLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListLiteral(Context\ListLiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::dictLiteral()}.
	 *
	 * @param Context\DictLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDictLiteral(Context\DictLiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::keyValues()}.
	 *
	 * @param Context\KeyValuesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKeyValues(Context\KeyValuesContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::spreadExpression()}.
	 *
	 * @param Context\SpreadExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSpreadExpression(Context\SpreadExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::keyValue()}.
	 *
	 * @param Context\KeyValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKeyValue(Context\KeyValueContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::enumeration()}.
	 *
	 * @param Context\EnumerationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnumeration(Context\EnumerationContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::enumerationOpt()}.
	 *
	 * @param Context\EnumerationOptContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnumerationOpt(Context\EnumerationOptContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::variable()}.
	 *
	 * @param Context\VariableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariable(Context\VariableContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::identifier()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::templateString()}.
	 *
	 * @param Context\TemplateStringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTemplateString(Context\TemplateStringContext $context);

	/**
	 * Visit a parse tree produced by {@see Recipe::template()}.
	 *
	 * @param Context\TemplateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTemplate(Context\TemplateContext $context);
}